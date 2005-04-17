<?php
class PEAR_Installer_Role_Docf extends PEAR_Installer_Role_Common
{
    var $_setup =
        array(
            'releasetypes' => array('php', 'extsrc', 'extbin'),
            'installable' => true,
            'locationconfig' => 'doc_dir',
            'honorsbaseinstall' => false,
            'unusualbaseinstall' => false,
            'phpfile' => false,
            'executable' => false,
            'phpextension' => false,
        );
    function getInfo()
    {
        return array(
            'releasetypes' => array('php', 'extsrc', 'extbin'),
            'installable' => true,
            'locationconfig' => 'doc_dir',
            'honorsbaseinstall' => false,
            'unusualbaseinstall' => false,
            'phpfile' => false,
            'executable' => false,
            'phpextension' => false,
        );
    }

    function setup(&$installer, $pkg, $atts, $file)
    {
    }
}
?>