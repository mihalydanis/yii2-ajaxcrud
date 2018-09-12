<?php

namespace johnitvn\ajaxcrud;

use yii\web\AssetBundle;

/**
 * @author John Martin <john.itvn@gmail.com>
 * @since 1.0
 */
class CrudAsset extends AssetBundle {
    public $sourcePath = '@ajaxcrud/assets';

    public $css = [
        'ajaxcrud.css',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'kartik\grid\GridViewAsset',
    ];

    public function init() {
        $this->js = [
            'ModalRemote.js',
            'ajaxcrud.js',
        ];
        parent::init();
    }
}
