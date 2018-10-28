<?php
namespace GreenFriendsTheme;
class GeneralSettings
{
    protected $options;

    public function logoImageUploadField($name)
    {
        $options = get_option('gf-general-logo-value');
        var_dump($options);
        if (!empty($options[$name]['id'])) {
            $image_attributes = wp_get_attachment_image_src($options[$name]['id'], 'full');
            $src = $image_attributes[0];
            $width = $image_attributes[1];
            $height = $image_attributes[2];
            $value = $options[$name]['id'];

        } else {
            $src = '';
            $width = '';
            $value = '';
        }

        echo '
        <div class="upload-logo-image-wrapper">
            <img src="' . $src . '" width="' . $width . '" height="auto"/>
            <div>
                <input type="hidden" name="gf-general-logo-value[' . $name . '][id]" id="gf-general-logo-value[' . $name . '][id]" value="' . $value . '" />
                 <button type="button" class="upload-logo-image-button button">Izaberite sliku</button>
                <button type="submit" class="remove-logo-image-button button">Obrišite sliku</button>
            </div>
        </div>';
    }
}