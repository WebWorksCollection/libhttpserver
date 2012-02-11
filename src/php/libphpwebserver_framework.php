<?php

/* ----------------------------------------------------------------------------
 * This file was automatically generated by SWIG (http://www.swig.org).
 * Version 2.0.4
 * 
 * This file is not intended to be easily readable and contains a number of 
 * coding conventions designed to improve portability and efficiency. Do not make
 * changes to this file unless you know what you are doing--modify the SWIG 
 * interface file instead. 
 * ----------------------------------------------------------------------------- */

// Try to load our extension if it's not already loaded.
if (!extension_loaded('libphpwebserver_framework')) {
  if (strtolower(substr(PHP_OS, 0, 3)) === 'win') {
    if (!dl('php_libphpwebserver_framework.dll')) return;
  } else {
    // PHP_SHLIB_SUFFIX gives 'dylib' on MacOS X but modules are 'so'.
    if (PHP_SHLIB_SUFFIX === 'dylib') {
      if (!dl('libphpwebserver_framework.so')) return;
    } else {
      if (!dl('libphpwebserver_framework.'.PHP_SHLIB_SUFFIX)) return;
    }
  }
}



abstract class libphpwebserver_framework {
	const NOT_FOUND_ERROR = NOT_FOUND_ERROR;

	const METHOD_ERROR = METHOD_ERROR;

	const NOT_METHOD_ERROR = NOT_METHOD_ERROR;

	const GENERIC_ERROR = GENERIC_ERROR;

	const DEFAULT_DROP_WS_PORT = DEFAULT_DROP_WS_PORT;

	const DEFAULT_DROP_WS_TIMEOUT = DEFAULT_DROP_WS_TIMEOUT;
}

/* PHP Proxy Classes */
class StringVector {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_libphpwebserver_framework_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __get($var) {
		if ($var === 'thisown') return swig_libphpwebserver_framework_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __construct($n=null) {
		if (is_resource($n) && get_resource_type($n) === '_p_std__vectorT_std__string_t') {
			$this->_cPtr=$n;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_StringVector(); break;
		default: $this->_cPtr=new_StringVector($n);
		}
	}

	function size() {
		return StringVector_size($this->_cPtr);
	}

	function capacity() {
		return StringVector_capacity($this->_cPtr);
	}

	function reserve($n) {
		StringVector_reserve($this->_cPtr,$n);
	}

	function clear() {
		StringVector_clear($this->_cPtr);
	}

	function push($x) {
		return StringVector_push($this->_cPtr,$x);
	}

	function is_empty() {
		return StringVector_is_empty($this->_cPtr);
	}

	function pop() {
		return StringVector_pop($this->_cPtr);
	}

	function get($i) {
		return StringVector_get($this->_cPtr,$i);
	}

	function set($i,$val) {
		return StringVector_set($this->_cPtr,$i,$val);
	}
}

class HttpUtils {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_libphpwebserver_framework_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __get($var) {
		if ($var === 'thisown') return swig_libphpwebserver_framework_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	const NONE = -1;

	const CERTIFICATE = HttpUtils_CERTIFICATE;

	const ANON = HttpUtils_ANON;

	const SRP = HttpUtils_SRP;

	const PSK = HttpUtils_PSK;

	const IA = HttpUtils_IA;

	static function http_continue() {
		return HttpUtils_http_continue_get();
	}

	static function http_switching_protocol() {
		return HttpUtils_http_switching_protocol_get();
	}

	static function http_processing() {
		return HttpUtils_http_processing_get();
	}

	static function http_ok() {
		return HttpUtils_http_ok_get();
	}

	static function http_created() {
		return HttpUtils_http_created_get();
	}

	static function http_accepted() {
		return HttpUtils_http_accepted_get();
	}

	static function http_non_authoritative_information() {
		return HttpUtils_http_non_authoritative_information_get();
	}

	static function http_no_content() {
		return HttpUtils_http_no_content_get();
	}

	static function http_reset_content() {
		return HttpUtils_http_reset_content_get();
	}

	static function http_partial_content() {
		return HttpUtils_http_partial_content_get();
	}

	static function http_multi_status() {
		return HttpUtils_http_multi_status_get();
	}

	static function http_multiple_choices() {
		return HttpUtils_http_multiple_choices_get();
	}

	static function http_moved_permanently() {
		return HttpUtils_http_moved_permanently_get();
	}

	static function http_found() {
		return HttpUtils_http_found_get();
	}

	static function http_see_other() {
		return HttpUtils_http_see_other_get();
	}

	static function http_not_modified() {
		return HttpUtils_http_not_modified_get();
	}

	static function http_use_proxy() {
		return HttpUtils_http_use_proxy_get();
	}

	static function http_switch_proxy() {
		return HttpUtils_http_switch_proxy_get();
	}

	static function http_temporary_redirect() {
		return HttpUtils_http_temporary_redirect_get();
	}

	static function http_bad_request() {
		return HttpUtils_http_bad_request_get();
	}

	static function http_unauthorized() {
		return HttpUtils_http_unauthorized_get();
	}

	static function http_payment_required() {
		return HttpUtils_http_payment_required_get();
	}

	static function http_forbidden() {
		return HttpUtils_http_forbidden_get();
	}

	static function http_not_found() {
		return HttpUtils_http_not_found_get();
	}

	static function http_method_not_allowed() {
		return HttpUtils_http_method_not_allowed_get();
	}

	static function http_method_not_acceptable() {
		return HttpUtils_http_method_not_acceptable_get();
	}

	static function http_proxy_authentication_required() {
		return HttpUtils_http_proxy_authentication_required_get();
	}

	static function http_request_timeout() {
		return HttpUtils_http_request_timeout_get();
	}

	static function http_conflict() {
		return HttpUtils_http_conflict_get();
	}

	static function http_gone() {
		return HttpUtils_http_gone_get();
	}

	static function http_length_required() {
		return HttpUtils_http_length_required_get();
	}

	static function http_precondition_failed() {
		return HttpUtils_http_precondition_failed_get();
	}

	static function http_request_entity_too_large() {
		return HttpUtils_http_request_entity_too_large_get();
	}

	static function http_request_uri_too_long() {
		return HttpUtils_http_request_uri_too_long_get();
	}

	static function http_unsupported_media_type() {
		return HttpUtils_http_unsupported_media_type_get();
	}

	static function http_requested_range_not_satisfiable() {
		return HttpUtils_http_requested_range_not_satisfiable_get();
	}

	static function http_expectation_failed() {
		return HttpUtils_http_expectation_failed_get();
	}

	static function http_unprocessable_entity() {
		return HttpUtils_http_unprocessable_entity_get();
	}

	static function http_locked() {
		return HttpUtils_http_locked_get();
	}

	static function http_failed_dependency() {
		return HttpUtils_http_failed_dependency_get();
	}

	static function http_unordered_collection() {
		return HttpUtils_http_unordered_collection_get();
	}

	static function http_upgrade_required() {
		return HttpUtils_http_upgrade_required_get();
	}

	static function http_retry_with() {
		return HttpUtils_http_retry_with_get();
	}

	static function http_internal_server_error() {
		return HttpUtils_http_internal_server_error_get();
	}

	static function http_not_implemented() {
		return HttpUtils_http_not_implemented_get();
	}

	static function http_bad_gateway() {
		return HttpUtils_http_bad_gateway_get();
	}

	static function http_service_unavailable() {
		return HttpUtils_http_service_unavailable_get();
	}

	static function http_gateway_timeout() {
		return HttpUtils_http_gateway_timeout_get();
	}

	static function http_version_not_supported() {
		return HttpUtils_http_version_not_supported_get();
	}

	static function http_variant_also_negotiated() {
		return HttpUtils_http_variant_also_negotiated_get();
	}

	static function http_insufficient_storage() {
		return HttpUtils_http_insufficient_storage_get();
	}

	static function http_bandwidth_limit_exceeded() {
		return HttpUtils_http_bandwidth_limit_exceeded_get();
	}

	static function http_not_extended() {
		return HttpUtils_http_not_extended_get();
	}

	static function http_header_accept() {
		return HttpUtils_http_header_accept_get();
	}

	static function http_header_accept_charset() {
		return HttpUtils_http_header_accept_charset_get();
	}

	static function http_header_accept_encoding() {
		return HttpUtils_http_header_accept_encoding_get();
	}

	static function http_header_accept_language() {
		return HttpUtils_http_header_accept_language_get();
	}

	static function http_header_accept_ranges() {
		return HttpUtils_http_header_accept_ranges_get();
	}

	static function http_header_age() {
		return HttpUtils_http_header_age_get();
	}

	static function http_header_allow() {
		return HttpUtils_http_header_allow_get();
	}

	static function http_header_authorization() {
		return HttpUtils_http_header_authorization_get();
	}

	static function http_header_cache_control() {
		return HttpUtils_http_header_cache_control_get();
	}

	static function http_header_connection() {
		return HttpUtils_http_header_connection_get();
	}

	static function http_header_content_encoding() {
		return HttpUtils_http_header_content_encoding_get();
	}

	static function http_header_content_language() {
		return HttpUtils_http_header_content_language_get();
	}

	static function http_header_content_length() {
		return HttpUtils_http_header_content_length_get();
	}

	static function http_header_content_location() {
		return HttpUtils_http_header_content_location_get();
	}

	static function http_header_content_md5() {
		return HttpUtils_http_header_content_md5_get();
	}

	static function http_header_content_range() {
		return HttpUtils_http_header_content_range_get();
	}

	static function http_header_content_type() {
		return HttpUtils_http_header_content_type_get();
	}

	static function http_header_date() {
		return HttpUtils_http_header_date_get();
	}

	static function http_header_etag() {
		return HttpUtils_http_header_etag_get();
	}

	static function http_header_expect() {
		return HttpUtils_http_header_expect_get();
	}

	static function http_header_expires() {
		return HttpUtils_http_header_expires_get();
	}

	static function http_header_from() {
		return HttpUtils_http_header_from_get();
	}

	static function http_header_host() {
		return HttpUtils_http_header_host_get();
	}

	static function http_header_if_match() {
		return HttpUtils_http_header_if_match_get();
	}

	static function http_header_if_modified_since() {
		return HttpUtils_http_header_if_modified_since_get();
	}

	static function http_header_if_none_match() {
		return HttpUtils_http_header_if_none_match_get();
	}

	static function http_header_if_range() {
		return HttpUtils_http_header_if_range_get();
	}

	static function http_header_if_unmodified_since() {
		return HttpUtils_http_header_if_unmodified_since_get();
	}

	static function http_header_last_modified() {
		return HttpUtils_http_header_last_modified_get();
	}

	static function http_header_location() {
		return HttpUtils_http_header_location_get();
	}

	static function http_header_max_forwards() {
		return HttpUtils_http_header_max_forwards_get();
	}

	static function http_header_pragma() {
		return HttpUtils_http_header_pragma_get();
	}

	static function http_header_proxy_authenticate() {
		return HttpUtils_http_header_proxy_authenticate_get();
	}

	static function http_header_proxy_authentication() {
		return HttpUtils_http_header_proxy_authentication_get();
	}

	static function http_header_range() {
		return HttpUtils_http_header_range_get();
	}

	static function http_header_referer() {
		return HttpUtils_http_header_referer_get();
	}

	static function http_header_retry_after() {
		return HttpUtils_http_header_retry_after_get();
	}

	static function http_header_server() {
		return HttpUtils_http_header_server_get();
	}

	static function http_header_te() {
		return HttpUtils_http_header_te_get();
	}

	static function http_header_trailer() {
		return HttpUtils_http_header_trailer_get();
	}

	static function http_header_transfer_encoding() {
		return HttpUtils_http_header_transfer_encoding_get();
	}

	static function http_header_upgrade() {
		return HttpUtils_http_header_upgrade_get();
	}

	static function http_header_user_agent() {
		return HttpUtils_http_header_user_agent_get();
	}

	static function http_header_vary() {
		return HttpUtils_http_header_vary_get();
	}

	static function http_header_via() {
		return HttpUtils_http_header_via_get();
	}

	static function http_header_warning() {
		return HttpUtils_http_header_warning_get();
	}

	static function http_header_www_authenticate() {
		return HttpUtils_http_header_www_authenticate_get();
	}

	static function http_version_1_0() {
		return HttpUtils_http_version_1_0_get();
	}

	static function http_version_1_1() {
		return HttpUtils_http_version_1_1_get();
	}

	static function http_method_connect() {
		return HttpUtils_http_method_connect_get();
	}

	static function http_method_delete() {
		return HttpUtils_http_method_delete_get();
	}

	static function http_method_head() {
		return HttpUtils_http_method_head_get();
	}

	static function http_method_get() {
		return HttpUtils_http_method_get_get();
	}

	static function http_method_options() {
		return HttpUtils_http_method_options_get();
	}

	static function http_method_post() {
		return HttpUtils_http_method_post_get();
	}

	static function http_method_put() {
		return HttpUtils_http_method_put_get();
	}

	static function http_method_trace() {
		return HttpUtils_http_method_trace_get();
	}

	static function http_post_encoding_form_urlencoded() {
		return HttpUtils_http_post_encoding_form_urlencoded_get();
	}

	static function http_post_encoding_multipart_formdata() {
		return HttpUtils_http_post_encoding_multipart_formdata_get();
	}

	static function tokenizeUrl($arg1,$separator="/") {
		$r=HttpUtils_tokenizeUrl($arg1,$separator);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (!class_exists($c)) {
				return new StringVector($r);
			}
			return new $c($r);
		}
		return $r;
	}

	static function standardizeUrl($arg1) {
		return HttpUtils_standardizeUrl($arg1);
	}

	function __construct($res=null) {
		if (is_resource($res) && get_resource_type($res) === '_p_HttpUtils') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_HttpUtils();
	}
}

class ArgComparator {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_libphpwebserver_framework_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __get($var) {
		if ($var === 'thisown') return swig_libphpwebserver_framework_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __construct($res=null) {
		if (is_resource($res) && get_resource_type($res) === '_p_ArgComparator') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_ArgComparator();
	}
}

class HttpEndpoint {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_libphpwebserver_framework_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __get($var) {
		if ($var === 'thisown') return swig_libphpwebserver_framework_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __construct($family_or_url=null,$family=null,$registration=null) {
		if (is_resource($family_or_url) && get_resource_type($family_or_url) === '_p_HttpEndpoint') {
			$this->_cPtr=$family_or_url;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_HttpEndpoint(); break;
		case 1: $this->_cPtr=new_HttpEndpoint($family_or_url); break;
		case 2: $this->_cPtr=new_HttpEndpoint($family_or_url,$family); break;
		default: $this->_cPtr=new_HttpEndpoint($family_or_url,$family,$registration);
		}
	}

	function match($url) {
		return HttpEndpoint_match($this->_cPtr,$url);
	}

	function get_url_pars() {
		$r=HttpEndpoint_get_url_pars($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (!class_exists($c)) {
				return new StringVector($r);
			}
			return new $c($r);
		}
		return $r;
	}

	function get_url_pieces() {
		$r=HttpEndpoint_get_url_pieces($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (!class_exists($c)) {
				return new StringVector($r);
			}
			return new $c($r);
		}
		return $r;
	}

	function get_chunk_positions() {
		return HttpEndpoint_get_chunk_positions($this->_cPtr);
	}
}

class HttpRequest {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_libphpwebserver_framework_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __get($var) {
		if ($var === 'thisown') return swig_libphpwebserver_framework_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __construct($arg1=null) {
		if (is_resource($arg1) && get_resource_type($arg1) === '_p_HttpRequest') {
			$this->_cPtr=$arg1;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_HttpRequest(); break;
		default: $this->_cPtr=new_HttpRequest($arg1);
		}
	}

	function getUser() {
		return HttpRequest_getUser($this->_cPtr);
	}

	function getPass() {
		return HttpRequest_getPass($this->_cPtr);
	}

	function getPath() {
		return HttpRequest_getPath($this->_cPtr);
	}

	function getPathPieces() {
		$r=HttpRequest_getPathPieces($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (!class_exists($c)) {
				return new StringVector($r);
			}
			return new $c($r);
		}
		return $r;
	}

	function getMethod() {
		return HttpRequest_getMethod($this->_cPtr);
	}

	function getHeaders() {
		return HttpRequest_getHeaders($this->_cPtr);
	}

	function getArgs() {
		return HttpRequest_getArgs($this->_cPtr);
	}

	function getHeader($arg1) {
		return HttpRequest_getHeader($this->_cPtr,$arg1);
	}

	function getArg($arg1) {
		return HttpRequest_getArg($this->_cPtr,$arg1);
	}

	function getContent() {
		return HttpRequest_getContent($this->_cPtr);
	}

	function setHeader($arg1,$arg2) {
		return HttpRequest_setHeader($this->_cPtr,$arg1,$arg2);
	}

	function setArg($arg1,$arg2) {
		return HttpRequest_setArg($this->_cPtr,$arg1,$arg2);
	}

	function setContent($arg1) {
		return HttpRequest_setContent($this->_cPtr,$arg1);
	}

	function growContent($arg1,$size) {
		return HttpRequest_growContent($this->_cPtr,$arg1,$size);
	}

	function setPath($arg1) {
		return HttpRequest_setPath($this->_cPtr,$arg1);
	}

	function setMethod($arg1) {
		return HttpRequest_setMethod($this->_cPtr,$arg1);
	}

	function removeHeader($arg1) {
		return HttpRequest_removeHeader($this->_cPtr,$arg1);
	}

	function setHeaders($arg1) {
		HttpRequest_setHeaders($this->_cPtr,$arg1);
	}

	function setArgs($arg1) {
		HttpRequest_setArgs($this->_cPtr,$arg1);
	}

	function setUser($arg1) {
		return HttpRequest_setUser($this->_cPtr,$arg1);
	}

	function setPass($arg1) {
		return HttpRequest_setPass($this->_cPtr,$arg1);
	}
}

class HttpResponse {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_libphpwebserver_framework_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __get($var) {
		if ($var === 'thisown') return swig_libphpwebserver_framework_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	const STRING_CONTENT = 0;

	const FILE_CONTENT = HttpResponse_FILE_CONTENT;

	function __construct($content=null,$responseCode=null,$responseType=null) {
		if (is_resource($content) && get_resource_type($content) === '_p_HttpResponse') {
			$this->_cPtr=$content;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_HttpResponse(); break;
		case 1: $this->_cPtr=new_HttpResponse($content); break;
		case 2: $this->_cPtr=new_HttpResponse($content,$responseCode); break;
		default: $this->_cPtr=new_HttpResponse($content,$responseCode,$responseType);
		}
	}

	function getContent() {
		return HttpResponse_getContent($this->_cPtr);
	}

	function setContent($arg1) {
		return HttpResponse_setContent($this->_cPtr,$arg1);
	}

	function getHeader($arg1) {
		return HttpResponse_getHeader($this->_cPtr,$arg1);
	}

	function getFooter($arg1) {
		return HttpResponse_getFooter($this->_cPtr,$arg1);
	}

	function setHeader($arg1,$arg2) {
		return HttpResponse_setHeader($this->_cPtr,$arg1,$arg2);
	}

	function setFooter($arg1,$arg2) {
		return HttpResponse_setFooter($this->_cPtr,$arg1,$arg2);
	}

	function setContentType($arg1) {
		return HttpResponse_setContentType($this->_cPtr,$arg1);
	}

	function removeHeader($arg1) {
		return HttpResponse_removeHeader($this->_cPtr,$arg1);
	}

	function getHeaders() {
		return HttpResponse_getHeaders($this->_cPtr);
	}

	function getFooters() {
		return HttpResponse_getFooters($this->_cPtr);
	}

	function setHeaders($arg1) {
		HttpResponse_setHeaders($this->_cPtr,$arg1);
	}

	function setFooters($arg1) {
		HttpResponse_setFooters($this->_cPtr,$arg1);
	}

	function setResponseCode($responseCode) {
		HttpResponse_setResponseCode($this->_cPtr,$responseCode);
	}

	function getResponseCode() {
		return HttpResponse_getResponseCode($this->_cPtr);
	}
}

class HttpResource {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_libphpwebserver_framework_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __get($var) {
		if ($var === 'thisown') return swig_libphpwebserver_framework_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __construct($res=null) {
		if (is_resource($res) && get_resource_type($res) === '_p_HttpResource') {
			$this->_cPtr=$res;
			return;
		}
		if (get_class($this) === 'HttpResource') {
			$_this = null;
		} else {
			$_this = $this;
		}
		$this->_cPtr=new_HttpResource($_this);
	}

	function render($arg0) {
		$r=HttpResource_render($this->_cPtr,$arg0);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (!class_exists($c)) {
				return new HttpResponse($r);
			}
			return new $c($r);
		}
		return $r;
	}

	function render_404() {
		$r=HttpResource_render_404($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (!class_exists($c)) {
				return new HttpResponse($r);
			}
			return new $c($r);
		}
		return $r;
	}

	function render_500() {
		$r=HttpResource_render_500($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (!class_exists($c)) {
				return new HttpResponse($r);
			}
			return new $c($r);
		}
		return $r;
	}

	function render_405() {
		$r=HttpResource_render_405($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (!class_exists($c)) {
				return new HttpResponse($r);
			}
			return new $c($r);
		}
		return $r;
	}

	function render_GET($arg0) {
		$r=HttpResource_render_GET($this->_cPtr,$arg0);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (!class_exists($c)) {
				return new HttpResponse($r);
			}
			return new $c($r);
		}
		return $r;
	}

	function render_POST($arg0) {
		$r=HttpResource_render_POST($this->_cPtr,$arg0);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (!class_exists($c)) {
				return new HttpResponse($r);
			}
			return new $c($r);
		}
		return $r;
	}

	function render_PUT($arg0) {
		$r=HttpResource_render_PUT($this->_cPtr,$arg0);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (!class_exists($c)) {
				return new HttpResponse($r);
			}
			return new $c($r);
		}
		return $r;
	}

	function render_HEAD($arg0) {
		$r=HttpResource_render_HEAD($this->_cPtr,$arg0);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (!class_exists($c)) {
				return new HttpResponse($r);
			}
			return new $c($r);
		}
		return $r;
	}

	function render_DELETE($arg0) {
		$r=HttpResource_render_DELETE($this->_cPtr,$arg0);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (!class_exists($c)) {
				return new HttpResponse($r);
			}
			return new $c($r);
		}
		return $r;
	}

	function render_TRACE($arg0) {
		$r=HttpResource_render_TRACE($this->_cPtr,$arg0);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (!class_exists($c)) {
				return new HttpResponse($r);
			}
			return new $c($r);
		}
		return $r;
	}

	function render_OPTIONS($arg0) {
		$r=HttpResource_render_OPTIONS($this->_cPtr,$arg0);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (!class_exists($c)) {
				return new HttpResponse($r);
			}
			return new $c($r);
		}
		return $r;
	}

	function render_CONNECT($arg0) {
		$r=HttpResource_render_CONNECT($this->_cPtr,$arg0);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (!class_exists($c)) {
				return new HttpResponse($r);
			}
			return new $c($r);
		}
		return $r;
	}

	function routeRequest($arg0) {
		$r=HttpResource_routeRequest($this->_cPtr,$arg0);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (!class_exists($c)) {
				return new HttpResponse($r);
			}
			return new $c($r);
		}
		return $r;
	}

	function setAllowing($method,$a) {
		return HttpResource_setAllowing($this->_cPtr,$method,$a);
	}

	function allowAll() {
		HttpResource_allowAll($this->_cPtr);
	}

	function disallowAll() {
		HttpResource_disallowAll($this->_cPtr);
	}

	function isAllowed($method) {
		return HttpResource_isAllowed($this->_cPtr,$method);
	}
}

class LoggingDelegate {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_libphpwebserver_framework_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __get($var) {
		if ($var === 'thisown') return swig_libphpwebserver_framework_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __construct($res=null) {
		if (is_resource($res) && get_resource_type($res) === '_p_LoggingDelegate') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_LoggingDelegate();
	}

	function log_access($arg1) {
		return LoggingDelegate_log_access($this->_cPtr,$arg1);
	}

	function log_error($arg1) {
		return LoggingDelegate_log_error($this->_cPtr,$arg1);
	}
}

class RequestValidator {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_libphpwebserver_framework_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __get($var) {
		if ($var === 'thisown') return swig_libphpwebserver_framework_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __construct($res=null) {
		if (is_resource($res) && get_resource_type($res) === '_p_RequestValidator') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_RequestValidator();
	}

	function validate($address) {
		return RequestValidator_validate($this->_cPtr,$address);
	}
}

class Unescaper {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_libphpwebserver_framework_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __get($var) {
		if ($var === 'thisown') return swig_libphpwebserver_framework_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __construct($res=null) {
		if (is_resource($res) && get_resource_type($res) === '_p_Unescaper') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_Unescaper();
	}

	function unescape($s) {
		Unescaper_unescape($this->_cPtr,$s);
	}
}

class Webserver {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_libphpwebserver_framework_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __get($var) {
		if ($var === 'thisown') return swig_libphpwebserver_framework_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __construct($port=9898,$maxThreads=0,$maxConnections=0,$memoryLimit=0,$connectionTimeout=0,$perIPConnectionLimit=0,$logDelegate=null,$validator=null,$unescaper=null,$maxThreadStackSize=0,$httpsMemKey=null,$httpsMemCert=null,$httpsMemTrust=null,$httpsPriorities=null,$credType=null,$digestAuthRandom=null,$nonceNcSize=0) {
		if (is_resource($port) && get_resource_type($port) === '_p_Webserver') {
			$this->_cPtr=$port;
			return;
		}
		switch (func_num_args()) {
		case 0: case 1: case 2: case 3: case 4: case 5: case 6: $this->_cPtr=new_Webserver($port,$maxThreads,$maxConnections,$memoryLimit,$connectionTimeout,$perIPConnectionLimit); break;
		case 7: $this->_cPtr=new_Webserver($port,$maxThreads,$maxConnections,$memoryLimit,$connectionTimeout,$perIPConnectionLimit,$logDelegate); break;
		case 8: $this->_cPtr=new_Webserver($port,$maxThreads,$maxConnections,$memoryLimit,$connectionTimeout,$perIPConnectionLimit,$logDelegate,$validator); break;
		case 9: case 10: $this->_cPtr=new_Webserver($port,$maxThreads,$maxConnections,$memoryLimit,$connectionTimeout,$perIPConnectionLimit,$logDelegate,$validator,$unescaper,$maxThreadStackSize); break;
		case 11: $this->_cPtr=new_Webserver($port,$maxThreads,$maxConnections,$memoryLimit,$connectionTimeout,$perIPConnectionLimit,$logDelegate,$validator,$unescaper,$maxThreadStackSize,$httpsMemKey); break;
		case 12: $this->_cPtr=new_Webserver($port,$maxThreads,$maxConnections,$memoryLimit,$connectionTimeout,$perIPConnectionLimit,$logDelegate,$validator,$unescaper,$maxThreadStackSize,$httpsMemKey,$httpsMemCert); break;
		case 13: $this->_cPtr=new_Webserver($port,$maxThreads,$maxConnections,$memoryLimit,$connectionTimeout,$perIPConnectionLimit,$logDelegate,$validator,$unescaper,$maxThreadStackSize,$httpsMemKey,$httpsMemCert,$httpsMemTrust); break;
		case 14: $this->_cPtr=new_Webserver($port,$maxThreads,$maxConnections,$memoryLimit,$connectionTimeout,$perIPConnectionLimit,$logDelegate,$validator,$unescaper,$maxThreadStackSize,$httpsMemKey,$httpsMemCert,$httpsMemTrust,$httpsPriorities); break;
		case 15: $this->_cPtr=new_Webserver($port,$maxThreads,$maxConnections,$memoryLimit,$connectionTimeout,$perIPConnectionLimit,$logDelegate,$validator,$unescaper,$maxThreadStackSize,$httpsMemKey,$httpsMemCert,$httpsMemTrust,$httpsPriorities,$credType); break;
		default: $this->_cPtr=new_Webserver($port,$maxThreads,$maxConnections,$memoryLimit,$connectionTimeout,$perIPConnectionLimit,$logDelegate,$validator,$unescaper,$maxThreadStackSize,$httpsMemKey,$httpsMemCert,$httpsMemTrust,$httpsPriorities,$credType,$digestAuthRandom,$nonceNcSize);
		}
	}

	function start($blocking=false) {
		return Webserver_start($this->_cPtr,$blocking);
	}

	function stop() {
		return Webserver_stop($this->_cPtr);
	}

	function isRunning() {
		return Webserver_isRunning($this->_cPtr);
	}

	function registerResource($resource,$http_resource,$family=false) {
		return Webserver_registerResource($this->_cPtr,$resource,$http_resource,$family);
	}

	function sweetKill() {
		Webserver_sweetKill($this->_cPtr);
	}
}

class ModdedRequest {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		$func = 'ModdedRequest_'.$var.'_set';
		if (function_exists($func)) return call_user_func($func,$this->_cPtr,$value);
		if ($var === 'thisown') return swig_libphpwebserver_framework_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __isset($var) {
		if (function_exists('ModdedRequest_'.$var.'_set')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __get($var) {
		$func = 'ModdedRequest_'.$var.'_get';
		if (function_exists($func)) {
			$r = call_user_func($func,$this->_cPtr);
			if (!is_resource($r)) return $r;
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			return new $c($r);
		}
		if ($var === 'thisown') return swig_libphpwebserver_framework_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __construct($res=null) {
		if (is_resource($res) && get_resource_type($res) === '_p_ModdedRequest') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_ModdedRequest();
	}
}


?>
