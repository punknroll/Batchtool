<?php

class nodeunhideOperation
{
    // Return help text for this filter
    function getHelpText()
    {
        return '
--operation="nodeunhide"
';
    }

    function setParameters( $parm_array )
    {
        return true;
    }

    function runOperation( &$node )
    {
		$db =& eZDB::instance();
        $db->begin();
		eZContentObjectTreeNode::unhideSubTree($node);
		return true;
		$db->commit();
    }
}

?>
