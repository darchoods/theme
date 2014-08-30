<div class="alert alert-info">
    <p><i class="fa fa-info-circle"></i> Use your irc <strong>account</strong> login, your usual nickname isnt always your account name! </small></p>
</div>
<div class="form">
{{ Former::horizontal_open()->action(URL::route('pxcms.user.login')) }}
    <div class="form-group">
        <label class="control-label col-md-3" for="email">Nickserv Account Name</label>
        <div class="col-md-9">
        @if (Auth::guest())
            <input type="text" class="form-control" id="email" name="email">
        @else
            <p class="form-control-static">{{ Auth::user()->username }}</p>
            <input type="hidden" class="form-control" id="email" name="email" value="{{ Auth::user()->username }}">
        @endif
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3" for="password">Password</label>
        <div class="col-md-9">
            <input type="password" class="form-control" id="password" name="password">
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-9 col-md-offset-3">
            <button type="submit" class="btn btn-success">Login</button>
            <button type="reset" class="btn btn-default">Reset</button>
        </div>
    </div>
{{ Form::token() , Former::close() }}
</div>
