<?php
/**
 * @file
 * Returns the HTML for a node.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728164
 */
?>
<article class="node-<?php print $node->nid; ?>"<?php print $attributes; ?>>
  <?php
    // We hide the comments and links now so that we can render them later.
    hide($content['comments']);
    hide($content['links']);
    //print render($content);
  ?>
  
  <div class="browse-item-page">
        
        
            <div class="container">
           
                <div class="browse-content">

                    <div class="row">

                        <div class="col-md-5">

                            <div class="browse-photo">
                            	<?php if($node->field_browse_image['und'][0]['value']): ?>
                                	<img src="<?php print $node->field_browse_image['und'][0]['value'];?>" alt="<?php print $node->title;?>" class="img-responsive" />
                                <?php endif ?>
                            </div>
                            
                            <div class="share-item">
                            	<p>Share this item</p>
                            	<ul class="list-inline">
                                	<li><a href="#" class="social-icon mail">Twitter</a></li>
                                    <li><a href="#" class="social-icon facebook">Facebook</a></li>
                                    <li><a href="#" class="social-icon twitter">Google+</a></li>
                                    <li><a href="#" class="social-icon pinterest">Pinterest</a></li>
								</ul>
                            </div>
                        </div>

                        <div class="col-md-7">
                            <div class="content-information">

                                <ul class="list-unstyled">
                                    <li>
                                        <div class="content-detail">
                                            <span class="heading">Title</span>
                                            <p><?php print $node->title;?></p>
                                        </div>
                                    </li>

                                    <li>
                                    	<?php if($node->field_institution['und'][0]['value']): ?>
                                        	<div class="content-detail">
                                            	<span class="heading">Institution</span>
												<p><?php print $node->field_institution['und'][0]['value'];?></p>
											</div>
										<?php endif ?>
                                    </li>

                                    <li>
                                    	<?php if($node->field_description['und'][0]['value']): ?>
                                        	<div class="content-detail">
                                            	<span class="heading">Description</span>
												<p><?php print $node->field_description['und'][0]['value'];?></p>
											</div>
										<?php endif ?>     
									</li>

                                    <li>
                                    	<?php if($node->field_subject['und'][0]['value']): ?>
                                        	<div class="content-detail">
                                            	<span class="heading">Subject</span>
												<p><a href="#"><?php print $node->field_subject['und'][0]['value'];?></a></p>
											</div>
										<?php endif ?>
                                    </li>

                                    <li>
                                    	<?php if($node->field_creator['und'][0]['value']): ?>
                                        	<div class="content-detail">
                                            	<span class="heading">Creator</span>
												<p><?php print $node->field_creator['und'][0]['value'];?></p>
											</div>
										<?php endif ?>
                                    </li>

                                    <li>
                                    	<?php if($node->field_contributor['und'][0]['value']): ?>
                                        	<div class="content-detail">
                                            	<span class="heading">Contributor</span>
												<p><a href="#"><?php print $node->field_contributor['und'][0]['value'];?></a></p>
											</div>
										<?php endif ?>
                                    </li>

                                    <li>
                                        <?php if($node->field_date['und'][0]['value']): ?>
                                        	<div class="content-detail">
                                            	<span class="heading">Date</span>
												<p><a href="#"><?php print $node->field_date['und'][0]['value'];?></a></p>
											</div>
										<?php endif ?>
                                    </li>

                                    <li>
                                        <?php if($node->field_location['und'][0]['value']): ?>
                                        	<div class="content-detail">
                                            	<span class="heading">Location</span>
												<p><?php print $node->field_location['und'][0]['value'];?></p>
											</div>
										<?php endif ?>
                                    </li>

                                    <li class="detail-divider"></li>

                                    <li>
                                        <?php if($node->field_format['und'][0]['value']): ?>
                                        	<div class="content-detail">
                                            	<span class="heading">Format</span>
												<p><?php print $node->field_format['und'][0]['value'];?></p>
											</div>
										<?php endif ?>
                                    </li>

                                    <li>
                                       <?php if($node->field_physicaldescription['und'][0]['value']): ?>
                                        	<div class="content-detail">
                                            	<span class="heading">Physical Description</span>
												<p><?php print $node->field_physicaldescription['und'][0]['value'];?></p>
											</div>
										<?php endif ?>
                                    </li>

                                    <li>
                                        <?php if($node->field_type['und'][0]['value']): ?>
                                        	<div class="content-detail">
                                            	<span class="heading">Type</span>
												<p><?php print $node->field_type['und'][0]['value'];?></p>
											</div>
										<?php endif ?>
                                    </li>

                                    <li class="detail-divider"></li>

                                    <li>
                                        <?php if($node->field_copyright['und'][0]['value']): ?>
                                        	<div class="content-detail">
                                            	<span class="heading">Copyright and Use</span>
												<p><?php print $node->field_copyright['und'][0]['value'];?></p>
											</div>
										<?php endif ?>
                                    </li>

                                    <li>
                                    	<?php if($node->field_url['und'][0]['value']): ?>
                                        	<div class="content-detail">
                                            	<span class="heading">Original Url</span>
												<p><a href="javascript:void(0);"><?php print $node->field_url['und'][0]['value'];?></a></p>
											</div>
										<?php endif ?>
                                    </li>

                                    <li>
                                        <div class="content-detail cite-detail">
                                            <span class="heading">Cite this Item</span>
                                            <p>Buttre, John Chester. "Matthew Vassar". 1821-1893 Vassar College Archive and Special Collections, Poughkeepsie, NY. http://digitallibrary.vassar.edu/fedora/repository/vassar%3A10535</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div>
                                            <p>
                                                <a style="text-decoration:none; color:#00aeef;" href="#">Contact this Institution &rarr;</a>
                                            </p>
                                        </div>
                                    </li>
                                    
                                </ul>

                            </div>
                        </div>
                    </div>



                </div>

            </div>
            
            
            <?php include('related-browse-item-view.php'); ?>
            


</div> <!-- end of browse item page -->
  
  <?php print render($content['links']); ?>

  <?php print render($content['comments']); ?>

</article>
