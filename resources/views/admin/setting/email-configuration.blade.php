<div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
    <div class="card border">
        <div class="card-body">
            <form action="{{route('admin.email-setting-update')}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email" value="{{$emailSettings->email ?? 'None'}}">
                </div>

                <div class="form-group">
                    <label>Mail Host</label>
                    <input type="text" class="form-control" name="host" value="{{$emailSettings->host ?? 'None'}}">
                </div>


                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Smtp username</label>
                            <input type="text" class="form-control" name="username" value="{{$emailSettings->username ?? 'None'}}">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Smtp password</label>
                            <input type="text" class="form-control" name="password" value="{{$emailSettings->password ?? 'None'}}">
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Mail port</label>
                            <input type="text" class="form-control" name="port" value="{{$emailSettings->port ?? 'None'}}">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Mail Encryption</label>
                            <select name="encryption" id="" class="form-control">
                                    <option {{$emailSettings->encryption ?? 'None' == 'tls' ? 'selected' : ''}} value="tls">TLS</option>
                                    <option {{$emailSettings->encryption ?? 'None' == 'ssl' ? 'selected' : ''}} value="ssl">SSL</option>
                            </select>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
