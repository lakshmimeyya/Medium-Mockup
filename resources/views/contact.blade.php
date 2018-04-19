@extends('welcome.app')

@section('content')

    <?php if($message = session('message')): ?>
        <div class="alert alert-success">
            <?php echo $message ?>
        </div>
    <?php endif; ?>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php foreach ($errors->all() as $error): ?>
                    <li><?php echo $error ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <div class="container">
          <div class="row">
              <div class="col-md-8 col-md-offset-2">
                  <div class="panel panel-default">
                      <div class="panel-heading"><h3>Contact Form</h3></div>
                      <div class="panel-body">

    <form method="post">
        <?php echo csrf_field() ?>

        @include('forms.text', [
            'label' => 'Name',
            'name' => 'name'
        ])

        @include('forms.text', [
            'label' => 'Email',
            'name' => 'email'
        ])

        @include('forms.text', [
            'label' => 'Bogus',
            'name' => 'bogus'
        ])

        <textarea name="message" rows="8" cols="80" placeholder="message"><?php echo old('message') ?></textarea>

        <input type="submit" name="" value="Submit">
      </form>
  </div>
</div>
</div>
</div>
</div>

@endsection
