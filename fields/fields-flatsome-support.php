<?php 

//add_filter( 'zadmin_acf_fields', function($fields){
	$data = [
        array(
            'key' => 'field_64174987e64df',
            'label' => 'Support',
            'name' => 'support',
            'aria-label' => '',
            'type' => 'group',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '100',
                'class' => '',
                'id' => '',
            ),
            'layout' => 'block',
            'sub_fields' => array(
                array(
                    'key' => 'field_64174987e64e1',
                    'label' => 'Flatsome Css classes cheatsheet',
                    'name' => '',
                    'aria-label' => '',
                    'type' => 'message',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '100',
                        'class' => '',
                        'id' => '',
                    ),
                    'message' => '
                    <table class="form-table">
                    <tbody>
                    <tr valign="top">
                    <th>Row</th>
                    <td>
                    <p> <code>align-middle</code> <code>align-top</code> <code>align-bottom</code> <code>align-center</code> <code>align-right</code> <code>align-equal</code></p><p> <code>row-collapse</code> <code>row-small</code> <code>row-large</code> <code>row-reverse</code> <code>row-isotope</code> <code>row-grid</code> <code>row-masonry</code> <code>row-divided</code></p><p> <code>row-box-shadow-1</code> <code>row-box-shadow-2</code> <code>row-box-shadow-3</code> <code>row-box-shadow-4</code> <code>row-box-shadow-5</code></p><p> <code>row-box-shadow-1-hover</code> <code>row-box-shadow-2-hover</code> <code>row-box-shadow-3-hover</code> <code>row-box-shadow-4-hover</code> <code>row-box-shadow-5-hover</code></p><p> <code>row-dashed</code> <code>row-solid</code></p><p> <code>is-full-height</code> <code>row-full-width</code></p><p> <code>dark</code></p><p> <code>flex-row</code> <code>flex-row-start</code> <code>flex-row-center</code> <code>flex-row-col</code> <code>flex-wrap</code> <code>flex-grow</code></p>                     </td>
                    </tr>
                    <tr valign="top">
                    <th>Col</th>
                    <td>
                    <p> <code>col-fit</code> <code>col-first</code> <code>col-last</code> <code>col-border</code> <code>col-divided</code></p><p> <code>large-1</code> <code>large-2</code> <code>large-3</code> <code>...</code> <code>large-12</code></p><p> <code>small-1</code> <code>small-2</code> <code>small-3</code> <code>...</code> <code>small-12 </code></p><p> <code>medium-1</code> <code>medium-2</code> <code>medium-3</code> <code>...</code> <code>medium -12 </code></p><p> <code>pull-right</code> <code>pull-left</code></p><p> <code>flex-col</code> <code>flex-left</code> <code>flex-center</code> <code>flex-right</code></p>                     </td>
                    </tr>
                    <tr valign="top">
                    <th>Size</th>
                    <td>
                    <p> <code>is-xxxlarge</code> <code>is-xxlarge</code> <code>is-xlarge</code> <code>is-larger</code> <code>is-large</code> <code>is-small</code> <code>is-smaller</code> <code>is-xsmall</code> <code>is-xxsmall</code></p>                       </td>
                    </tr>
                    <tr valign="top">
                    <th>Font</th>
                    <td>
                    <p> <code>is-normal</code> <code>is-bold</code> <code>is-thin</code> <code>is-italic</code> <code>is-uppercase</code> <code>is-alt-font</code></p>                      </td>
                    </tr>
                    <tr valign="top">
                    <th>Button</th>
                    <td>
                    <p> <code>button</code> <code>is-form</code> <code>is-link</code> <code>is-outline</code> <code>is-underline</code> <code>checkout</code> <code>alt</code> <code>disabled</code></p>                        </td>
                    </tr>
                    <tr valign="top">
                    <th>Margin</th>
                    <td>
                    <p> <code>mb</code> <code>mt</code> <code>mr</code> <code>ml</code></p><p> <code>mb-0</code> <code>ml-0</code> <code>mr-0</code> <code>mt-0</code> <code>mb-half</code> <code>mt-half</code> <code>mr-half</code> <code>ml-half</code></p>                      </td>
                    </tr>
                    <tr valign="top">
                    <th>Padding</th>
                    <td>
                    <p> <code>pb</code> <code>pt</code></p><p> <code>pb-half</code> <code>pt-half</code> <code>pb-0</code> <code>pt-0</code> <code>no-margin</code> <code>no-padding</code></p>                     </td>
                    </tr>
                    <tr valign="top">
                    <th>Text</th>
                    <td>
                    <p> <code>text-shadow</code> <code>text-shadow-1</code> <code>text-shadow-2</code> <code>text-shadow-3</code> <code>text-shadow-4</code> <code>text-shadow-5</code></p><p> <code>text-center</code> <code>text-right</code> <code>text-left</code></p><p> <code>text-box</code> <code>text-box-square</code> <code>text-box-circle</code></p><p> <code>text-bordered-white</code> <code>text-bordered-primary</code> <code>text-bordered-dark</code></p><p> <code>text-boarder-top-bottom-white</code> <code>text-boarder-top-bottom-dark</code> <code>text-boarder-top-bottom-white</code> <code>text-boarder-top-bottom-dark</code></p>                       </td>
                    </tr>
                    <tr valign="top">
                    <th>Border</th>
                    <td>
                    <p> <code>has-border</code> <code>round</code> <code>bb</code> <code>bt</code> <code>bl</code> <code>br</code></p><p> <code>is-border</code> <code>is-dashed</code> <code>is-dotted</code></p><p> <code>has-border</code> <code>dashed-border</code> <code>success-border</code></p>                        </td>
                    </tr>
                    <tr valign="top">
                    <th>Color</th>
                    <td>
                    <p> <code>primary-color</code> <code>secondary-color</code> <code>success-color</code> <code>alert-color</code></p>                     </td>
                    </tr>
                    <tr valign="top">
                    <th>Background</th>
                    <td>
                    <p> <code>bg-fill</code> <code>bg-top</code></p><p> <code>bg-primary-color</code> <code>bg-secondary-color</code> <code>bg-success-color</code> <code>bg-alert-color</code> <code>is-transparent</code></p>                     </td>
                    </tr>
                    <tr valign="top">
                    <th>Position</th>
                    <td>
                    <p> <code>relative</code> <code>absolute</code> <code>fixed</code></p><p> <code>top</code> <code>right</code> <code>left</code> <code>bottom</code> <code>v-center</code> <code>h-center</code></p><p> <code>lg-x5</code> <code>lg-x15</code> <code>lg-x25</code> <code>...</code> <code>lg-x95</code> <code>lg-y5</code> <code>lg-y15</code> <code>lg-y25</code> <code>...</code> <code>lg-y95</code> <code>lg-x0</code> <code>lg-x10</code> <code>lg-x20</code> <code>...</code> <code>lg-x100</code> <code>lg-y0</code> <code>lg-y10</code> <code>lg-y20</code> <code>...</code> <code>lg-y100</code> <code>lg-x50</code> <code>lg-y50</code></p><p> <code>md-x5</code> <code>md-x15</code> <code>md-x25</code> <code>...</code> <code>md-x95</code> <code>md-y5</code> <code>md-y15</code> <code>md-y25</code> <code>...</code> <code>md-y95</code> <code>md-x0</code> <code>md-x10</code> <code>md-x20</code> <code>...</code> <code>md-x100</code> <code>md-y0</code> <code>md-y10</code> <code>md-y20</code> <code>...</code> <code>md-y100</code> <code>md-x50</code> <code>md-y50</code></p><p> <code>x5</code> <code>x15</code> <code>x25</code> <code>...</code> <code>x95</code> <code>y5</code> <code>y15</code> <code>y25</code> <code>...</code> <code>y95</code> <code>x0</code> <code>x10</code> <code>x20</code> <code>...</code> <code>x100</code> <code>y0</code> <code>y10</code> <code>y20</code> <code>...</code> <code>y100</code> <code>x50</code> <code>y50</code></p><p> <code>z-1</code> <code>z-2</code> <code>z-3</code> <code>z-4</code> <code>z-5</code> <code>z-top</code> <code>z-top-2</code> <code>z-top-3</code></p>                       </td>
                    </tr>
                    <tr valign="top">
                    <th>Opacity</th>
                    <td>
                    <p> <code>op-4</code> <code>op-5</code> <code>op-6</code> <code>op-7</code> <code>op-8</code></p>                       </td>
                    </tr>
                    <tr valign="top">
                    <th>Icon</th>
                    <td>
                    <p> <code>icon-lock</code> <code>icon-user-o</code> <code>icon-line</code> <code>icon-chat</code> <code>icon-user</code> <code>icon-shopping-cart</code> <code>icon-tumblr</code> <code>icon-gift</code> <code>icon-phone</code> <code>icon-play</code> <code>icon-menu</code> <code>icon-equalizer</code> <code>icon-shopping-basket</code> <code>icon-shopping-bag</code> <code>icon-google-plus</code> <code>icon-heart-o</code> <code>icon-heart</code> <code>icon-500px</code> <code>icon-vk</code> <code>icon-angle-left</code> <code>icon-angle-right</code> <code>icon-angle-up</code> <code>icon-angle-down</code> <code>icon-twitter</code> <code>icon-envelop</code> <code>icon-tag</code> <code>icon-star</code> <code>icon-star-o</code> <code>icon-facebook</code> <code>icon-feed</code> <code>icon-checkmark</code> <code>icon-plus</code> <code>icon-instagram</code> <code>icon-tiktok</code> <code>icon-pinterest</code> <code>icon-search</code> <code>icon-skype</code> <code>icon-dribbble</code> <code>icon-certificate</code> <code>icon-expand</code> <code>icon-linkedin</code> <code>icon-map-pin-fill</code> <code>icon-pen-alt-fill</code> <code>icon-youtube</code> <code>icon-flickr</code> <code>icon-clock</code> <code>icon-snapchat</code> <code>icon-whatsapp</code> <code>icon-telegram</code> <code>icon-twitch</code> <code>icon-discord</code></p>                      </td>
                    </tr>
                    <tr valign="top">
                    <th>Custom</th>
                    <td>
                    <p> <code>--secondary-color</code> <code>--success-color</code> <code>--alert-color</code></p><p> <code>text-primary</code> <code>text-secondary</code> <code>text-success</code> <code>alert-color</code></p><p> <code>row-nopaddingbottom</code> <code>nopaddingbottom</code></p><p> <code>sliderbot</code></p><p> <code>bgr-size-auto</code></p>                     </td>
                    </tr>


                    </tbody></table>
                    ',
                    'new_lines' => 'wpautop',
                    'esc_html' => 0,
                ),
            ),
        ),
	];
    return $data;
	//$fields['fields'] = array_merge( $fields['fields'], $data);
	//return $fields;
//},110 );

