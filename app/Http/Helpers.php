<?php

/**
 * Show form for toggle active status
 *
 * @param int     $id       Examples: $post->id, $article->id, $user->id
 * @param string  $resource Examples: posts, articles, users
 * @param boolean $active   Examples: $post->active, $article->active, $user->active
 *
 * @return string
 */
function toggle_status($id, $resource, $active = false) {
    $output = '<form action="'.route('admin.'.$resource.'.status', $id).'" method="POST">';
    $output .= '<input type="hidden" name="_token" value="'.csrf_token().'">';
    $output .= '<input type="hidden" name="_method" value="PATCH">';
    $output .= '<button type="submit" class="btn btn-default">';
    $output .= ($active) ? '<i class="fa fa-check text-success"></i>' : '<i class="fa fa-remove text-danger"></i>';
    $output .= '</button>';
    $output .= '</form>';

    return $output;
}

/**
 * Show form for delete resource
 *
 * @param int    $id       Examples: $post->id, $user->id, $article->id
 * @param string $resource Examples: posts, users, articles
 *
 * @return string
 */
function delete_resource($id, $resource) {
    $output = '<form action="'.route('admin.'.$resource.'.destroy', $id).'" id="delete" method="POST" style="display: inline;">';
    $output .= '<input type="hidden" name="_token" value="'.csrf_token().'">';
    $output .= '<input type="hidden" name="_method" value="DELETE">';
    $output .= '<button type="submit" class="btn btn-danger">';
    $output .= '<i class="fa fa-remove"></i>';
    $output .= '</button>';
    $output .= '</form>';

    return $output;
}