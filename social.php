<?php
    // Get access to $post object
    global $post;
    
    // Get twitter handle
    $twitter = get_field('twitter', 'options');
    
    // define links
    $links = array(
        'facebook' => 'https://www.facebook.com/sharer/sharer.php?u=' . get_permalink(),
        'twitter'  => 'https://twitter.com/intent/tweet?text='. get_the_title() .'&url='. get_permalink() .'&via='. $twitter,
        'mail'     => 'mailto:?subject='. get_the_title() .'&body=Take a look at this link - ' . get_permalink(info@olympusrealtypm.ca),
        'linkedin' => 'https://www.linkedin.com/shareArticle?mini=true&url='. get_permalink(https://www.linkedin.com/company/olympus-realty-pm/) .'&title='. get_the_title() .'&summary=' . get_the_excerpt(),
        'gplus'    => 'https://plus.google.com/share?url=' . get_permalink()
    );
?>

<nav class="share" role="menu" aria-label="Share Links">
    <li class="share__item">
        <a href="<?php echo $links['facebook']; ?>" class="share__link"><span class="icon icon--xlarge icon--social-fb"></span><span class="is-hidden">Share this Post on Facebook</span></a>
    </li>
    <li class="share__item">
        <a href="<?php echo $links['twitter']; ?>" class="share__link"><span class="icon icon--xlarge icon--social-tw"></span><span class="is-hidden">Share this Post on Twitter</span></a>
    </li>
    <li class="share__item">
        <a href="<?php echo $links['mail']; ?>" class="share__link"><span class="icon icon--xlarge icon--social-mail"></span><span class="is-hidden">Share this Post via Email</span></a>
    </li>
    <li class="share__item">
        <a href="<?php echo $links['linkedin']; ?>" class="share__link"><span class="icon icon--xlarge icon--social-li"></span><span class="is-hidden">Share this Post on Linked In</span></a>
    </li>
    <li class="share__item">
        <a href="<?php echo $links['gplus']; ?>" class="share__link"><span class="icon icon--xlarge icon--social-gp"></span><span class="is-hidden">Share this Post on Google Plus</span></a>
    </li>
</nav>