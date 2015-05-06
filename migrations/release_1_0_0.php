<?php

namespace clausi\pmcleaner\migrations;

class release_1_0_0 extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return array('\phpbb\db\migration\data\v31x\v313');
	}
	
	public function update_data()
	{
		return array(
			array('permission.add', array('u_pmcleaner', true)),
		);
	}
	
}
