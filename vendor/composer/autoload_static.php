<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitce7509a2bcae3233826701e544bcbdad
{
    public static $files = array (
        '240b5162fce10eb746a21f362eb3975f' => __DIR__ . '/..' . '/CMB2/init.php',
        '29ae5241f185d3404f5620f20da2e13d' => __DIR__ . '/../..' . '/src/functions/apply-settings.php',
        '90b23edb1086ecb674690b3923c903d3' => __DIR__ . '/../..' . '/src/functions/gravity-forms.php',
        '54fee958f28caab4d626af9160abe482' => __DIR__ . '/../..' . '/src/functions/helper-functions.php',
        '5232377bcbc8fcba1a3d576c569415ed' => __DIR__ . '/../..' . '/src/functions/plugin.php',
        '59829d59bb12e766cfbe9e4b8c23650d' => __DIR__ . '/../..' . '/src/settings/module.php',
        '7292dafdb6328bffaaec4aee1c978879' => __DIR__ . '/../..' . '/src/shortcodes/module.php',
    );

    public static $classMap = array (
        'ForwardJump\\Utility\\CustomPostTypes\\Custom_Post_Type' => __DIR__ . '/../..' . '/src/custom-post-types/class-custom-post-type.php',
        'ForwardJump\\Utility\\CustomTaxonomies\\Custom_Taxonomy' => __DIR__ . '/../..' . '/src/custom-taxonomies/class-custom-taxonomy.php',
        'ForwardJump\\Utility\\GenesisAdminMetaboxes\\Genesis_CMB2_Admin_Meta_Box' => __DIR__ . '/../..' . '/src/genesis-admin-metaboxes/class-genesis-cmb2-admin-meta-box.php',
        'ForwardJump\\Utility\\GenesisAdminMetaboxes\\Genesis_CPT_Archives_Meta_Box' => __DIR__ . '/../..' . '/src/genesis-admin-metaboxes/class-genesis-cpt-archive-settings-meta-box.php',
        'ForwardJump\\Utility\\GenesisAdminMetaboxes\\Genesis_Theme_Settings_Meta_Box' => __DIR__ . '/../..' . '/src/genesis-admin-metaboxes/class-genesis-theme-settings-meta-box.php',
        'ForwardJump\\Utility\\PostMetaboxes\\Post_Metabox' => __DIR__ . '/../..' . '/src/post-metaboxes/class-post-metabox.php',
        'ForwardJump\\Utility\\Settings\\Settings_Page' => __DIR__ . '/../..' . '/src/settings/class-settings.php',
        'ForwardJump\\Utility\\Shortcodes\\Add_Shortcode' => __DIR__ . '/../..' . '/src/shortcodes/class-add-shortcode.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitce7509a2bcae3233826701e544bcbdad::$classMap;

        }, null, ClassLoader::class);
    }
}
