<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" id="post-<?php the_ID(); ?>">

                        <div class="panel panel-default text-center">
                            <div class="heading">
                                <div style="position: absolute; margin-top: -7px; margin-left: 4px;">
                                      <span class="label label-danger">New</span>                                </div>
                                <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail( 'twentyseventeen-featured-image' ); ?>
								
							    </a>                                
                            </div>
                            <div class="body" style="padding: 3px">
                                <div class="caption">
                                    <h5><a href="<?php the_permalink(); ?>" title="<?php get_the_title() ?>"><?php get_the_title() ?></a></h5>
                                </div>
                            </div>
                        </div>

                    </div>