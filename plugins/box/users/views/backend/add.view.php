<!-- Users_add -->
<h2><?php echo __('New User Registration', 'users'); ?></h2>
<?php

    echo (
        Html::br().
        Form::open().
        Form::hidden('csrf', Security::token())
        );
    ?>
 <div class="row">
    <div class="col-md-6">
    <div class="form-group">
    <?php
        echo (
            Form::label('login', __('Username', 'users')).
            Form::input('login', null, array('class' => (isset($errors['users_this_user_alredy_exists']) || isset($errors['users_empty_login'])) ? 'form-control error-field' : 'form-control'))
        );

        if (isset($errors['users_this_user_alredy_exists'])) echo Html::nbsp(3).'<span style="color:red">'.$errors['users_this_user_alredy_exists'].'</span>';
        if (isset($errors['users_empty_login'])) echo Html::nbsp(3).'<span style="color:red">'.$errors['users_empty_login'].'</span>';
    ?>
    </div>

    <div class="form-group">
    <?php 
        echo (
            Form::label('password', __('Password', 'users')).
            Form::password('password', null, array('class' => (isset($errors['users_empty_password'])) ? 'form-control error-field' : 'form-control'))
        );
        if (isset($errors['users_empty_password'])) echo Html::nbsp(3).'<span style="color:red">'.$errors['users_empty_password'].'</span>';
    ?>
    </div>

    <div class="form-group">
    <?php

        echo (
            Form::label('email', __('Email', 'users')).
            Form::input('email', null, array('class' => (isset($errors['users_this_email_alredy_exists']) || isset($errors['users_empty_email'])) ? 'form-control error-field' : 'form-control'))
        );

        if (isset($errors['users_this_email_alredy_exists'])) echo Html::nbsp(3).'<span class="error">'.$errors['users_this_email_alredy_exists'].'</span>';
        if (isset($errors['users_empty_email'])) echo Html::nbsp(3).'<span style="color:red">'.$errors['users_empty_email'].'</span>';
    ?>
    </div>
    <div class="form-group">
    <?php
        echo (
            Form::label('role', __('Role', 'users')).
            Form::select('role', array('admin' => __('Admin', 'users'), 'editor' => __('Editor', 'users'), 'user' => __('User', 'users')), null, array('class' => 'form-control'))
        );
    ?>
    </div>
    <?php
        echo (
            Form::submit('register', __('Register', 'users'), array('class' => 'btn btn-primary')).Html::nbsp(2).
            Html::anchor(__('Cancel', 'users'), 'index.php?id=users', array('title' => __('Cancel', 'users'), 'class' => 'btn btn-default')).
            Form::close()
        );
    ?>
    </div>
    </div>
</div>