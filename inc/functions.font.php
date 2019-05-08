<?php

function medim_get_default_param( $param_array, $param_name, $default = '' ) {
    return ( ( isset( $param_array[$param_name] ) && $param_array[$param_name] != '' ) ? $param_array[$param_name] : $default );
}

function medim_get_font_variant( $variant ) {
    $v = array(
        'weight' => absint( $variant ),
        'style' => preg_replace('/[\d]+/', '', $variant)
    );

    if ( empty( $v['style'] ) ) {
        $v['style'] = 'normal';
    } else if ( $v['style'] === 'italic' && empty( $v['weight'] ) ) {
        $v['weight'] = 400;
        $v['style'] = 'italic';
    } else if ( $v['style'] === 'regular' && empty( $v['weight'] ) ) {
        $v['weight'] = 400;
        $v['style'] = 'normal';
    } elseif ( $v['style'] === 'inherit' ) {
        $v['weight'] = $v['style'];
    }

    return $v;
}

function medim_get_google_font_stack() {
    $tags = array('body', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6');
    $font_stack = array();

    foreach( $tags as $tag ) {
        $props = cs_get_option("typography_{$tag}");
        $font = isset( $props['font'] ) ? $props['font'] : 'websafe';
        $family = medim_get_default_param( $props, 'family' );
        $variant = medim_get_default_param( $props, 'variant' );

        if ( $font === 'websafe' ) {
            continue;
        }
        $font_stack[] = "{$family}:" . implode( '', medim_get_font_variant( $variant ) );
    }
    return implode( '|', $font_stack );
}

function medim_prepare_css_properties( $props ) {
        $prop_map = array();
        foreach ( $props as $prop => $value ) {
            $value = trim( $value );
            if ( $value === '' || $value === '!important' )
                continue;

            $prop_map[] = "\t{$prop}:{$value};";
        }
        return esc_attr( implode( "\n", $prop_map ) );
    }

function medim_generate_css_rules( $map ) {
        $rules = '';
        if ( ! empty( $map ) ) {
            foreach( $map as $selector => $props ) {
                if ( empty( $props ) )
                    continue;

                $rules .= sprintf( ".%s\n{\n%s\n}\n", esc_attr( $selector ), medim_prepare_css_properties( $props ) );
            }
        }
        return $rules;
    }

function medim_typography_css() {
    if ( cs_get_option( 'enable_typography' ) ) 

    $tags = array('body','h1','h2','h3','h4','h5','h6');
    $map = array();
    $rules = '';
    if ( !empty( $tags ) ) {
        foreach ( $tags as $tag ) {
            $selector = "{$tag}, {$tag}";
            $props = cs_get_option("typography_{$tag}");
            $variant = medim_get_font_variant( medim_get_default_param( $props, 'variant' ) );
            $map = array_merge($map, array(
                $selector => array(
                    'font-family' => medim_get_default_param( $props, 'family' ),
                    'font-size'   => medim_check_css_unit( medim_get_default_param( $props, 'size' ) ),
                    'line-height' => medim_check_css_unit( medim_get_default_param( $props, 'height' ) ),
                    'font-weight' => $variant['weight'],
                    'font-style'  => $variant['style'],
                    ),
                )
            );
        }
    }
    
    printf( "<style id='medim-custom-typography' type='text/css'>\n%s\n</style>",
        medim_generate_css_rules( $map )
        );
}
add_filter( 'wp_head', 'medim_typography_css' );
