 <?php

                                // don't forget to replace 'gallery' with your field name
                                $images = get_field('gallery');
                                if ($images) {
                                    foreach ($images as $imageURL) {
                                        // displays the image. Each %s in the string will be replaced with the related argument
                                        printf("<img src='%s'>",
                                            esc_url($imageURL));
                                    }
                                }
                                ?>
