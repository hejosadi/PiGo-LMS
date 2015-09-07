<?php
/**
 * @author Paweł Sroka
 */
class FtpConnection {
	
	/**
	 * @var array
	 */
	private $options;
	
	/**
	 * @var resource a FTP stream on success or false on error
	 */
	private $connection;
	
	/**
	 * @var bool is user currently logged in
	 */
	private $loggedIn = false;
	
	/**
	 * @param array $options
	 * @throws RuntimeException
	 */
	public function __construct($options) {
		if (!extension_loaded('ftp')) {
			throw new RuntimeException("PHP ftp extension is required to use " . __CLASS__ . " class");
		}
		
		$defaults = array(
			'host' => 'localhoost',
			'port' => 21,
			'timeout' => 15,
			'secure' => false,
		);
		$this->options = array_merge($defaults, (array)$options);
	}
	
	/**
	 * Destructor
	 */
	public function __destruct() {
		$this->close();
	}
	
	/**
	 * Opens an FTP connection
	 * 
	 * @param boolean $login logiin automatically
	 * @return boolean
	 */
	public function connect($login = true) {
		$host = elgg_extract('host', $this->options);
		$port = elgg_extract('port', $this->options);
		if ($port) {
			$port = (int)$port;
		}
		$timeout = elgg_extract('timeout', $this->options);
		$secure = elgg_extract('secure', $this->options);
		if ($secure) {
			if (!function_exists('ftp_ssl_connect')) {
				throw new RuntimeException("PHP openssl extension is required to be compiled statically to PHP to use secure option in " . __CLASS__ . " class");
			}
			$this->connection = ftp_ssl_connect($host, $port, $timeout);
		} else {
			$this->connection = ftp_connect($host, $port, $timeout);
		}
		if ($login && is_resource($this->connection)) {
			if (!$this->login()) {
				return false;
			}
		}
		return $this->isConnected();
	}
	
	/**
	 * Closes an FTP connection
	 * 
	 * @return boolean Returns true on success or false on failure
	 */
	public function close() {
		$result = ftp_close($this->connection);
		$this->connection = null;
		$this->loggedIn = false;
		return $result;
	}
	
	/**
	 * Logs in to an FTP connection
	 * 
	 * @return boolean
	 */
	public function login() {
		$username = elgg_extract('username', $this->options);
		$password = elgg_extract('password', $this->options);
		$this->loggedIn = ftp_login($this->connection, $username, $password);
		return $this->loggedIn;
	}
	
	/**
	 * Logs in to an FTP connection
	 * 
	 * @return boolean
	 */
	public function isLoggedIn() {
		return $this->loggedIn;
	}
	
	/**
	 * Logs in to an FTP connection
	 * 
	 * @return boolean
	 */
	public function isConnected() {
		return $this->connection !== false;
	}
	
	/**
	 * @return resource a FTP stream on success or false on error
	 */
	public function getResource() {
		return $this->connection;
	}
	
	/**
	 * @return array
	 */
	public function getOptions() {
		return $this->options;
	}
	
	/**
	 * Opens an FTP connection
	 * 
	 * @return string the remote system type, or false on error. 
	 */
	public function systype() {
		return ftp_systype($this->connection);
	}
	
}