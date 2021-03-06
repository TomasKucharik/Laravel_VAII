<div class="form-group text-danger">
    @foreach($errors->all() as $error)
        {{ $error }} <br>
    @endforeach
</div>


<form method="post" action="{{ $action }}">
    @csrf
    @method($method)
    <div class="form-group ">
        <label for="name">name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Full name"
               value="{{ old('name',@$model->name)  }}">
    </div>

    <div class="form-group ">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp"
               placeholder="Enter email" value=" {{ @$model->email }}">
        <small id="emailHelp" class="form-text text-muted">We will never share your email with anyone else</small>
    </div>

    <div class="form-group ">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="password">
    </div>

    <div class="form-group ">
        <label for="password">Password again</label>
        <input type="password" class="form-control" id="password" name="password_confirmation" placeholder="password">
    </div>

    <div>
        <input type="submit" class="btn-primary form-control">
    </div>


</form>
