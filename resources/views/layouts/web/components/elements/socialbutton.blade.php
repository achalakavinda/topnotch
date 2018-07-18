<div class="social-info d-flex justify-content-between">
    <?php $social_buttons = \App\Models\SocialInfo::get()->where('visibility',1); ?>

    @foreach($social_buttons as $social_button)
            <a href="{{ $social_button->url or '#' }}"><i class="{{ $social_button->icon or 'fa fa-close' }}" aria-hidden="true"></i></a>
    @endforeach
</div>