						<?php
//
// File generated by ... on the 2018-11-26T14:15:37-0500
// Please do not edit manually
//

/**
 * Classes and menus for itop-endusers-devices (version 2.2.0)
 *
 * @author      iTop compiler
 * @license     http://opensource.org/licenses/AGPL-3.0
 */



class PC extends ConnectableCI
{
	public static function Init()
	{
		$aParams = array
		(
			'category' => 'bizmodel,searchable',
			'key_type' => 'autoincrement',
			'name_attcode' => array('name'),
			'state_attcode' => '',
			'reconc_keys' => array('name', 'org_id', 'organization_name'),
			'db_table' => 'pc',
			'db_key_field' => 'id',
			'db_finalclass_field' => '',
			'icon' => utils::GetAbsoluteUrlModulesRoot().'itop-endusers-devices/images/laptop.png',
		);
		MetaModel::Init_Params($aParams);
		MetaModel::Init_InheritAttributes();
		MetaModel::Init_AddAttribute(new AttributeExternalKey("osfamily_id", array("targetclass"=>'OSFamily', "allowed_values"=>null, "sql"=>'osfamily_id', "is_null_allowed"=>true, "on_target_delete"=>DEL_MANUAL, "depends_on"=>array(), "display_style"=>'select', "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalField("osfamily_name", array("allowed_values"=>null, "extkey_attcode"=>'osfamily_id', "target_attcode"=>'name', "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalKey("osversion_id", array("targetclass"=>'OSVersion', "allowed_values"=>new ValueSetObjects("SELECT OSVersion WHERE osfamily_id = :this->osfamily_id"), "sql"=>'osversion_id', "is_null_allowed"=>true, "on_target_delete"=>DEL_MANUAL, "depends_on"=>array('osfamily_id'), "display_style"=>'select', "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalField("osversion_name", array("allowed_values"=>null, "extkey_attcode"=>'osversion_id', "target_attcode"=>'name', "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeString("cpu", array("allowed_values"=>null, "sql"=>'cpu', "default_value"=>'', "is_null_allowed"=>true, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeString("ram", array("allowed_values"=>null, "sql"=>'ram', "default_value"=>'', "is_null_allowed"=>true, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeEnum("type", array("allowed_values"=>new ValueSetEnum("laptop,desktop"), "display_style"=>'radio_horizontal', "sql"=>'type', "default_value"=>'', "is_null_allowed"=>true, "depends_on"=>array(), "always_load_in_tables"=>false)));



		MetaModel::Init_SetZListItems('details', array (
  0 => 'softwares_list',
  1 => 'contacts_list',
  2 => 'documents_list',
  3 => 'physicalinterface_list',
  4 => 'networkdevice_list',
  5 => 'providercontracts_list',
  6 => 'services_list',
  'col:col1' => 
  array (
    'fieldset:Server:baseinfo' => 
    array (
      0 => 'name',
      1 => 'org_id',
      2 => 'status',
      3 => 'business_criticity',
      4 => 'location_id',
    ),
    'fieldset:Server:moreinfo' => 
    array (
      0 => 'brand_id',
      1 => 'model_id',
      2 => 'osfamily_id',
      3 => 'osversion_id',
      4 => 'type',
      5 => 'cpu',
      6 => 'ram',
      7 => 'serialnumber',
      8 => 'asset_number',
    ),
  ),
  'col:col2' => 
  array (
    'fieldset:Server:Date' => 
    array (
      0 => 'move2production',
      1 => 'purchase_date',
      2 => 'end_of_warranty',
    ),
    'fieldset:Server:otherinfo' => 
    array (
      0 => 'description',
    ),
  ),
));
		MetaModel::Init_SetZListItems('standard_search', array (
  0 => 'name',
  1 => 'org_id',
  2 => 'status',
  3 => 'business_criticity',
  4 => 'location_id',
  5 => 'brand_id',
  6 => 'model_id',
  7 => 'type',
  8 => 'serialnumber',
  9 => 'asset_number',
  10 => 'move2production',
  11 => 'purchase_date',
  12 => 'end_of_warranty',
));
		MetaModel::Init_SetZListItems('list', array (
  0 => 'org_id',
  1 => 'status',
  2 => 'business_criticity',
  3 => 'location_id',
  4 => 'brand_id',
  5 => 'model_id',
  6 => 'serialnumber',
));

	}


}


class Printer extends ConnectableCI
{
	public static function Init()
	{
		$aParams = array
		(
			'category' => 'bizmodel,searchable',
			'key_type' => 'autoincrement',
			'name_attcode' => array('name'),
			'state_attcode' => '',
			'reconc_keys' => array('name', 'org_id', 'organization_name'),
			'db_table' => 'printer',
			'db_key_field' => 'id',
			'db_finalclass_field' => '',
			'icon' => utils::GetAbsoluteUrlModulesRoot().'itop-endusers-devices/images/printer.png',
		);
		MetaModel::Init_Params($aParams);
		MetaModel::Init_InheritAttributes();



		MetaModel::Init_SetZListItems('details', array (
  0 => 'contacts_list',
  1 => 'documents_list',
  2 => 'physicalinterface_list',
  3 => 'networkdevice_list',
  4 => 'providercontracts_list',
  5 => 'services_list',
  'col:col1' => 
  array (
    'fieldset:Server:baseinfo' => 
    array (
      0 => 'name',
      1 => 'org_id',
      2 => 'status',
      3 => 'business_criticity',
      4 => 'location_id',
    ),
    'fieldset:Server:moreinfo' => 
    array (
      0 => 'brand_id',
      1 => 'model_id',
      2 => 'serialnumber',
      3 => 'asset_number',
    ),
  ),
  'col:col2' => 
  array (
    'fieldset:Server:Date' => 
    array (
      0 => 'move2production',
      1 => 'purchase_date',
      2 => 'end_of_warranty',
    ),
    'fieldset:Server:otherinfo' => 
    array (
      0 => 'description',
    ),
  ),
));
		MetaModel::Init_SetZListItems('standard_search', array (
  0 => 'name',
  1 => 'org_id',
  2 => 'status',
  3 => 'business_criticity',
  4 => 'location_id',
  5 => 'brand_id',
  6 => 'model_id',
  7 => 'serialnumber',
  8 => 'asset_number',
  9 => 'move2production',
  10 => 'purchase_date',
  11 => 'end_of_warranty',
));
		MetaModel::Init_SetZListItems('list', array (
  0 => 'org_id',
  1 => 'status',
  2 => 'business_criticity',
  3 => 'location_id',
  4 => 'brand_id',
  5 => 'model_id',
  6 => 'serialnumber',
));

	}


}


abstract class TelephonyCI extends PhysicalDevice
{
	public static function Init()
	{
		$aParams = array
		(
			'category' => 'bizmodel,searchable',
			'key_type' => 'autoincrement',
			'name_attcode' => array('name'),
			'state_attcode' => '',
			'reconc_keys' => array('name', 'org_id', 'organization_name'),
			'db_table' => 'telephonyci',
			'db_key_field' => 'id',
			'db_finalclass_field' => '',
			'icon' => utils::GetAbsoluteUrlModulesRoot().'itop-endusers-devices/images/mobile-phone.png',
		);
		MetaModel::Init_Params($aParams);
		MetaModel::Init_InheritAttributes();
		MetaModel::Init_AddAttribute(new AttributeString("phonenumber", array("allowed_values"=>null, "sql"=>'phonenumber', "default_value"=>'', "is_null_allowed"=>true, "depends_on"=>array(), "always_load_in_tables"=>false)));



		MetaModel::Init_SetZListItems('details', array (
  0 => 'name',
  1 => 'org_id',
  2 => 'status',
  3 => 'business_criticity',
  4 => 'location_id',
  5 => 'brand_id',
  6 => 'model_id',
  7 => 'phonenumber',
  8 => 'serialnumber',
  9 => 'asset_number',
  10 => 'move2production',
  11 => 'purchase_date',
  12 => 'end_of_warranty',
  13 => 'description',
  14 => 'contacts_list',
  15 => 'documents_list',
));
		MetaModel::Init_SetZListItems('standard_search', array (
  0 => 'name',
  1 => 'org_id',
  2 => 'status',
  3 => 'business_criticity',
  4 => 'location_id',
  5 => 'brand_id',
  6 => 'model_id',
  7 => 'phonenumber',
  8 => 'serialnumber',
  9 => 'asset_number',
  10 => 'move2production',
  11 => 'purchase_date',
  12 => 'end_of_warranty',
));
		MetaModel::Init_SetZListItems('list', array (
  0 => 'org_id',
  1 => 'status',
  2 => 'location_id',
  3 => 'brand_id',
  4 => 'model_id',
  5 => 'phonenumber',
));

	}


}


class Phone extends TelephonyCI
{
	public static function Init()
	{
		$aParams = array
		(
			'category' => 'bizmodel,searchable',
			'key_type' => 'autoincrement',
			'name_attcode' => array('name'),
			'state_attcode' => '',
			'reconc_keys' => array('name', 'org_id', 'organization_name'),
			'db_table' => 'phone',
			'db_key_field' => 'id',
			'db_finalclass_field' => '',
			'icon' => utils::GetAbsoluteUrlModulesRoot().'itop-endusers-devices/images/phone.png',
		);
		MetaModel::Init_Params($aParams);
		MetaModel::Init_InheritAttributes();



		MetaModel::Init_SetZListItems('details', array (
  0 => 'name',
  1 => 'org_id',
  2 => 'status',
  3 => 'business_criticity',
  4 => 'location_id',
  5 => 'brand_id',
  6 => 'model_id',
  7 => 'phonenumber',
  8 => 'serialnumber',
  9 => 'asset_number',
  10 => 'move2production',
  11 => 'purchase_date',
  12 => 'end_of_warranty',
  13 => 'description',
  14 => 'contacts_list',
  15 => 'documents_list',
  16 => 'providercontracts_list',
  17 => 'services_list',
));
		MetaModel::Init_SetZListItems('standard_search', array (
  0 => 'name',
  1 => 'org_id',
  2 => 'status',
  3 => 'business_criticity',
  4 => 'location_id',
  5 => 'brand_id',
  6 => 'model_id',
  7 => 'phonenumber',
  8 => 'serialnumber',
  9 => 'asset_number',
  10 => 'move2production',
  11 => 'purchase_date',
  12 => 'end_of_warranty',
));
		MetaModel::Init_SetZListItems('list', array (
  0 => 'org_id',
  1 => 'status',
  2 => 'location_id',
  3 => 'brand_id',
  4 => 'model_id',
  5 => 'phonenumber',
));

	}


}


class MobilePhone extends TelephonyCI
{
	public static function Init()
	{
		$aParams = array
		(
			'category' => 'bizmodel,searchable',
			'key_type' => 'autoincrement',
			'name_attcode' => array('name'),
			'state_attcode' => '',
			'reconc_keys' => array('name', 'org_id', 'organization_name'),
			'db_table' => 'mobilephone',
			'db_key_field' => 'id',
			'db_finalclass_field' => '',
			'icon' => utils::GetAbsoluteUrlModulesRoot().'itop-endusers-devices/images/mobile-phone.png',
		);
		MetaModel::Init_Params($aParams);
		MetaModel::Init_InheritAttributes();
		MetaModel::Init_AddAttribute(new AttributeString("imei", array("allowed_values"=>null, "sql"=>'imei', "default_value"=>'', "is_null_allowed"=>true, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeString("hw_pin", array("allowed_values"=>null, "sql"=>'hw_pin', "default_value"=>'', "is_null_allowed"=>true, "depends_on"=>array(), "always_load_in_tables"=>false)));



		MetaModel::Init_SetZListItems('details', array (
  0 => 'name',
  1 => 'org_id',
  2 => 'status',
  3 => 'business_criticity',
  4 => 'location_id',
  5 => 'brand_id',
  6 => 'model_id',
  7 => 'phonenumber',
  8 => 'imei',
  9 => 'hw_pin',
  10 => 'serialnumber',
  11 => 'asset_number',
  12 => 'move2production',
  13 => 'purchase_date',
  14 => 'end_of_warranty',
  15 => 'description',
  16 => 'contacts_list',
  17 => 'documents_list',
  18 => 'providercontracts_list',
  19 => 'services_list',
));
		MetaModel::Init_SetZListItems('standard_search', array (
  0 => 'name',
  1 => 'org_id',
  2 => 'status',
  3 => 'business_criticity',
  4 => 'location_id',
  5 => 'brand_id',
  6 => 'model_id',
  7 => 'phonenumber',
  8 => 'imei',
  9 => 'hw_pin',
  10 => 'serialnumber',
  11 => 'asset_number',
  12 => 'move2production',
  13 => 'purchase_date',
  14 => 'end_of_warranty',
));
		MetaModel::Init_SetZListItems('list', array (
  0 => 'org_id',
  1 => 'status',
  2 => 'location_id',
  3 => 'brand_id',
  4 => 'model_id',
  5 => 'phonenumber',
));

	}


}


class IPPhone extends TelephonyCI
{
	public static function Init()
	{
		$aParams = array
		(
			'category' => 'bizmodel,searchable',
			'key_type' => 'autoincrement',
			'name_attcode' => array('name'),
			'state_attcode' => '',
			'reconc_keys' => array('name', 'org_id', 'organization_name'),
			'db_table' => 'ipphone',
			'db_key_field' => 'id',
			'db_finalclass_field' => '',
			'icon' => utils::GetAbsoluteUrlModulesRoot().'itop-endusers-devices/images/ipphone.png',
		);
		MetaModel::Init_Params($aParams);
		MetaModel::Init_InheritAttributes();



		MetaModel::Init_SetZListItems('details', array (
  0 => 'name',
  1 => 'org_id',
  2 => 'status',
  3 => 'business_criticity',
  4 => 'location_id',
  5 => 'brand_id',
  6 => 'model_id',
  7 => 'phonenumber',
  8 => 'serialnumber',
  9 => 'asset_number',
  10 => 'move2production',
  11 => 'purchase_date',
  12 => 'end_of_warranty',
  13 => 'description',
  14 => 'contacts_list',
  15 => 'documents_list',
  16 => 'providercontracts_list',
  17 => 'services_list',
));
		MetaModel::Init_SetZListItems('standard_search', array (
  0 => 'name',
  1 => 'org_id',
  2 => 'status',
  3 => 'business_criticity',
  4 => 'location_id',
  5 => 'brand_id',
  6 => 'model_id',
  7 => 'phonenumber',
  8 => 'serialnumber',
  9 => 'asset_number',
  10 => 'move2production',
  11 => 'purchase_date',
  12 => 'end_of_warranty',
));
		MetaModel::Init_SetZListItems('list', array (
  0 => 'org_id',
  1 => 'status',
  2 => 'location_id',
  3 => 'brand_id',
  4 => 'model_id',
  5 => 'phonenumber',
));

	}


}


class Tablet extends PhysicalDevice
{
	public static function Init()
	{
		$aParams = array
		(
			'category' => 'bizmodel,searchable',
			'key_type' => 'autoincrement',
			'name_attcode' => array('name'),
			'state_attcode' => '',
			'reconc_keys' => array('name', 'org_id', 'organization_name'),
			'db_table' => 'tablet',
			'db_key_field' => 'id',
			'db_finalclass_field' => '',
			'icon' => utils::GetAbsoluteUrlModulesRoot().'itop-endusers-devices/images/tablet.png',
		);
		MetaModel::Init_Params($aParams);
		MetaModel::Init_InheritAttributes();



		MetaModel::Init_SetZListItems('details', array (
  0 => 'name',
  1 => 'org_id',
  2 => 'status',
  3 => 'business_criticity',
  4 => 'location_id',
  5 => 'brand_id',
  6 => 'model_id',
  7 => 'serialnumber',
  8 => 'asset_number',
  9 => 'move2production',
  10 => 'purchase_date',
  11 => 'end_of_warranty',
  12 => 'description',
  13 => 'contacts_list',
  14 => 'documents_list',
  15 => 'providercontracts_list',
  16 => 'services_list',
));
		MetaModel::Init_SetZListItems('standard_search', array (
  0 => 'name',
  1 => 'org_id',
  2 => 'status',
  3 => 'business_criticity',
  4 => 'location_id',
  5 => 'brand_id',
  6 => 'model_id',
  7 => 'serialnumber',
  8 => 'asset_number',
  9 => 'move2production',
  10 => 'purchase_date',
  11 => 'end_of_warranty',
));
		MetaModel::Init_SetZListItems('list', array (
  0 => 'org_id',
  1 => 'status',
  2 => 'business_criticity',
  3 => 'location_id',
  4 => 'brand_id',
  5 => 'model_id',
  6 => 'serialnumber',
));

	}


}


class Peripheral extends PhysicalDevice
{
	public static function Init()
	{
		$aParams = array
		(
			'category' => 'bizmodel,searchable',
			'key_type' => 'autoincrement',
			'name_attcode' => array('name'),
			'state_attcode' => '',
			'reconc_keys' => array('name', 'org_id', 'organization_name'),
			'db_table' => 'peripheral',
			'db_key_field' => 'id',
			'db_finalclass_field' => '',
			'icon' => utils::GetAbsoluteUrlModulesRoot().'itop-endusers-devices/images/peripherals.png',
		);
		MetaModel::Init_Params($aParams);
		MetaModel::Init_InheritAttributes();



		MetaModel::Init_SetZListItems('details', array (
  0 => 'name',
  1 => 'org_id',
  2 => 'status',
  3 => 'business_criticity',
  4 => 'location_id',
  5 => 'brand_id',
  6 => 'model_id',
  7 => 'serialnumber',
  8 => 'asset_number',
  9 => 'move2production',
  10 => 'purchase_date',
  11 => 'end_of_warranty',
  12 => 'description',
  13 => 'contacts_list',
  14 => 'documents_list',
  15 => 'providercontracts_list',
  16 => 'services_list',
));
		MetaModel::Init_SetZListItems('standard_search', array (
  0 => 'name',
  1 => 'org_id',
  2 => 'status',
  3 => 'business_criticity',
  4 => 'location_id',
  5 => 'brand_id',
  6 => 'model_id',
  7 => 'serialnumber',
  8 => 'asset_number',
  9 => 'move2production',
  10 => 'purchase_date',
  11 => 'end_of_warranty',
));
		MetaModel::Init_SetZListItems('list', array (
  0 => 'org_id',
  1 => 'status',
  2 => 'business_criticity',
  3 => 'location_id',
  4 => 'brand_id',
  5 => 'model_id',
  6 => 'serialnumber',
));

	}


}