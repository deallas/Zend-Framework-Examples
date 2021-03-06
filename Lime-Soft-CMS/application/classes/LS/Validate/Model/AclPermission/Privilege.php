<?php

class LS_Validate_Model_AclPermission_Privilege extends Zend_Validate
{

	public function __construct()
	{
		$this->addValidator(new Zend_Validate_Db_RecordExists(array(
			'table' => 'AclPrivilegeDict',
			'field' => 'name',
			'adapter' => Zend_Registry::get('db')
		)));
		$this->addValidator(new LS_Validate_Model_AclPrivilege_Name());
	}

}
