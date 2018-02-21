<?php
namespace App\Lib;


final class ApiException extends \Exception
{
	private $errorCodes;

	const
		UNKNOWN_ERROR = 0,
		SUCCESS = 1;

	const
		UNKNOWN_TOKEN = 20,
		LOGIN_INCORRECT_USERNAME_PASSWORD = 21,
		LOGIN_INACTIVE_USER = 22,
		LOGIN_INACTIVE_ROLE = 23,
		LOGIN_INACTIVE_DEALER = 24;

	const
		GALLERY_UNKNOWN_IMAGE = 40,
		GALLERY_IMAGE_FILE_NOT_FOUND = 41;


	const
		USER_UNKNOWN_USER = 50,
		USER_NAME_NOT_UNIQUE = 51;

	const
		DEALER_UNKNOWN_DEALER = 60,
		DEALER_NAME_NOT_UNIQUE = 61,
		DEALER_NOT_ENOUGH_CREDIT_TO_DEDUCT = 62,
		DEALER_NOT_ENOUGH_CREDIT_TO_ADD = 63,
		DEALER_CANNOT_HAVE_INFINITE_CREDIT = 64,
		DEALER_CANNOT_VIEW_ANY_CARD = 65,
		DEALER_CIRCULAR_PARENT = 66;

	const
		ROLE_UNKNOWN_ROLE = 70,
		ROLE_DUPLICATE_NAME = 71,
		ROLE_SAME_PARENT = 72,
		ROLE_CIRCULAR_PARENT = 73;

	const
		CUSTOMER_UNKNOWN_CUSTOMER = 100,
		CUSTOMER_UNKNOWN_FILE = 101,
		CUSTOMER_WILD_SEARCH_CRITERIA = 102,
		CUSTOMER_SEARCH_TOO_MANY = 103,
		CUSTOMER_UPDATE_VALIDATION_ERROR = 104;


	const
		REPORT_UNKNOWN_REPORT = 200,
		REPORT_QUERY_ERROR = 201,
		REPORT_UNKNOWN_REPORT_FILE = 202,
		REPORT_FILE_NOT_FOUND = 203,
		REPORT_NOT_AUTHORIZED = 204;

	const
		GRAPH_UNKNOWN_GRAPH = 210,
		GRAPH_QUERY_ERROR = 211;

	const REQUEST_UNKNOWN_REQUEST = 220;

	const
		IMPORT_CUSTOMERS_UNKNOWN_BATCH = 230,
		IMPORT_CUSTOMERS_FILE_NOT_FOUND = 231,
		IMPORT_CUSTOMERS_NO_COLUMNS_FOUND = 232,
		IMPORT_CUSTOMERS_MIXED_UNIQUE_PARAMETERS = 233,
		IMPORT_CUSTOMERS_NOT_ENOUGH_PARAMETER = 234,
		IMPORT_CUSTOMERS_CUSTOMER_VALIDATION_ERROR = 235,
		IMPORT_CUSTOMERS_GENERAL_ERROR = 236;

	const
		INVOICE_UNKNOWN_INVOICE = 250,
		INVOICE_ALREADY_CANCELLED = 251;

	const
		PRODUCT_UNKNOWN_PRODUCT = 260;

	const
		BOUQUET_UNKNOWN_BOUQUET = 270;

	const
		GROUP_UNKNOWN_GROUP = 280;

	const
		TEMPLATE_UNKNOWN_TEMPLATE = 290,
		TEMPLATE_ERROR_FILLING = 291;

	const TICKET_UNKNOWN_TICKET = 300;

	const TICKET_CATEGORY_UNKNOWN_TICKET_CATEGORY = 310;

	const TICKET_DEPARTMENT_UNKNOWN_TICKET_DEPARTMENT = 320;

	const TICKET_PRIORITY_UNKNOWN_TICKET_PRIORITY = 330;

	const PAYMENT_UNKNOWN_PAYMENT = 340;

	const
		CUSTOM_VALUE_UNKNOWN_CUSTOM_VALUE = 350,
		CUSTOM_VALUE_QUERY_ERROR = 351;

	const
		GROUP_ACTION_UNKNOWN_GROUP_ACTION = 360,
		GROUP_ACTION_NOT_AUTHORIZED = 361,
		GROUP_ACTION_TRANSLATE_ERROR = 362;

	const PAYMENT_METHOD_UNKNOWN_PAYMENT_METHOD = 370;

	const
		INVOICE_NOT_ENOUGH_CREDIT_DEALER = 400,
		INVOICE_SELECT_PRODUCT = 401,
		INVOICE_OUT_OF_STOCK = 402,
		INVOICE_NOT_ENOUGH_CREDIT_CUSTOMER = 403;

	const CONFIG_UNKNOWN_VALUE = 420;

	const
		LOG_UNKNOWN_LOG = 430,
		LOG_UNKNOWN_LOG_TEMPLATE = 431;

	const
		VOUCHER_UNKNOWN_VOUCHER = 440,
		VOUCHER_USED_ALREADY_BY_SAME_CUSTOMER = 441,
		VOUCHER_USED_ALREADY_BY_DIFFERENT_CUSTOMER = 442,
		VOUCHER_BATCH_NOT_ACTIVE = 443,
		VOUCHER_BATCH_EXPIRED = 444;


	const
		SYSTEM_UNKNOWN_SYSTEM = 450,
		SYSTEM_UNKNOWN_COMMAND = 451,
		SYSTEM_COMMAND_ERROR = 452,
		SYSTEM_COMMAND_EXCEEDED = 453,
		SYSTEM_RABBITMQ_ERROR = 454,
		SYSTEM_SUPERVISOR_NOT_ENABLED = 455,
		SYSTEM_BACKUP_NOT_ENABLED = 456,
		SYSTEM_BACKUP_NOT_FOUND = 457;

	const
		TRANSFER_DEVICE_ERROR = 475;

	const
		GOLDY_IMPORT_TOO_MANY_DEVICES = 10000,
		GOLDY_IMPORT_CUSTOMERS_NOT_ALL_COLUMNS = 10001,
		GOLDY_IMPORT_CARDLESS_NOT_FOUND = 10002,
		GOLDY_IMPORT_CUSTOMERS_UNKNOWN_CUSTOMER = 10003;

	const
		SAFEVIEW_DUPLICATE_SMARTCARD = 11000,
		SAFEVIEW_DUPLICATE_SETTOPBOX = 11001,
		SAFEVIEW_OTT_UNKNOWN_SETTOPBOX = 11002,
		SAFEVIEW_OTT_REGISTRATION_ERROR = 11003;

	const
		CONAX_DUPLICATE_SMARTCARD = 11500,
		CONAX_DUPLICATE_SETTOPBOX = 11501;

	const
		NSTV_DUPLICATE_SMARTCARD = 12000,
		NSTV_DUPLICATE_SETTOPBOX = 12001;

	const
		KINGVON_DUPLICATE_SMARTCARD = 12100,
		KINGVON_DUPLICATE_SETTOPBOX = 12101;

	const CORPUS_REGISTRATION_ERROR = 12200;

	const
		MEDIANET_SALE_ERROR = 12500,
		MEDIANET_DOWNGRADE_ERROR = 12501,
		MEDIANET_CANCEL_ADDON_FIRST = 12502,
		MEDIANET_DEALER_NOT_ENOUGH_CREDIT = 12503,
		MEDIANET_IMPORT_ERROR = 12504,
		MEDIANET_NOT_ALLOWED_CUSTOMER_RECHARGE = 12505,
		MEDIANET_ACCOUNT_NOT_FOUND = 12506,
		MEDIANET_UNAVAILABLE_CATEGORY = 12507,
		MEDIANET_UNKNOWN_CAS_IMPORT_BATCH = 12508,
		MEDIANET_NO_DEVICE = 12509;

	const
		EPG_UNKNOWN_EPG = 1500,
		EPG_UNSUPPORTED_DATE_FORMAT = 1501,
		EPG_UNSUPPORTED_FILE = 1502,
		EPG_SET_EXCEPTION = 1503,
		EPG_XML_FATAL_ERROR = 1504,
		EPG_BAD_FILE = 1505,
		EPG_EXCEL_ERROR = 1506,
		EPG_INSERT_ERROR = 1507;

	const
		MEDIANET_SELFCARE_DUPLICATE_EMAIL = 12600,
		MEDIANET_SELFCARE_INCORRECT_LOGIN = 12601,
		MEDIANET_SELFCARE_INCORRECT_ACC_NIC = 12602,
		MEDIANET_SELFCARE_ACC_ASSIGNED_DIFFERENT = 12603,
		MEDIANET_SELFCARE_ACC_ASSIGNED_SAME = 12604,
		MEDIANET_SELFCARE_UNKNOWN_ACCOUNT = 12605,
		MEDIANET_SELFCARE_ACCOUNT_NOT_ASSIGNED = 12606,
		MEDIANET_SELFCARE_UNKNOWN_ORDER = 12607,
		MEDIANET_SELFCARE_UNKNOWN_RECEIPT = 12608,
		MEDIANET_SELFCARE_WRONG_AREA = 12609,
		MEDIANET_SELFCARE_ORDER_ALREADY_PROCESSED = 12610;

	const
		MEDIANET_SELFCARE_UNKNOWN_DEALER = 12700;

	const MODERN_TV_ACCOUNT_CREATE_FAILED = 12400;

	const
		ALBAYAN_HASH_NOT_FOUND = 12900,
		ALBAYAN_HASH_PROCESSED_ALREADY = 12901,
		ALBAYAN_EMAIL_USED = 12902,
		ALBAYAN_UNKNOWN_EMAIL = 12903,
		ALBAYAN_UNKNOWN_ORDER = 12904;


	private $response = [];


	public function __construct($exception, $response = [])
	{
		parent::__construct($exception);
		$this->setResponse($response);
	}


	public function setResponse($response)
	{
		$this->response = $response;
	}


	public function getResponse()
	{
		return $this->response;
	}


	public function getErrorName()
	{
		$reflection = new \ReflectionClass($this);
		$this->errorCodes = array_flip($reflection->getConstants());
		$error = $this->getMessage();
		if (array_key_exists($error, $this->errorCodes)) {
			return $this->errorCodes[$error];
		}
		return $error;
	}

}
