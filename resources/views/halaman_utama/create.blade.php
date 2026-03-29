@extends('layout.master')
@section('title', "Tambah Data User")
@section('content')
<section class="basic-choices">
  <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-header">
                <h4 class="card-title">Form Create User</h4>
              </div>
              <div class="card-content">
                  <div class="card-body">
                      <form class="form" action="{{ route('halaman_utama.store') }}" method="post"
                          enctype="multipart/form-data">
                          {{ csrf_field() }}
                          <div class="row">
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="name">Nama Lengkap (Fullname)</label>
                                      <input type="text" id="name"
                                          class="form-control @error('name') is-invalid @enderror"
                                          placeholder="ex : Mark Zugerberg.." name="name">
                                      @if($errors->has('name'))
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{$errors->first('name') }}</strong>
                                      </span>
                                      @endif
                                  </div>
                                  <br />
                                  <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" id="username"
                                        class="form-control @error('username') is-invalid @enderror"
                                        placeholder="ex : markzuckerberg.." name="username">
                                    @if($errors->has('username'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$errors->first('username') }}</strong>
                                    </span>
                                    @endif
                                  </div>
                                  <br />
                                  <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" id="email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        placeholder="ex : mark@gmail.com" name="email">
                                    @if($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                  </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="phone">Number Phone</label>
                                  <input type="text" id="phone"
                                      class="form-control @error('phone') is-invalid @enderror"
                                      placeholder="ex : 08123456789" name="phone">
                                  @if($errors->has('phone'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{$errors->first('phone') }}</strong>
                                  </span>
                                  @endif
                                </div>
                                <br />
                                <div class="form-group">
                                  <label for="website">Website</label>
                                    <input type="text" id="website"
                                        class="form-control @error('website') is-invalid @enderror"
                                        placeholder="ex : mark.com" name="website">
                                    @if($errors->has('website'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$errors->first('website') }}</strong>
                                    </span>
                                    @endif
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12 mt-3">
                                <div class="form-check">
                                  <input class="form-check-input @error('accept') is-invalid @enderror" type="checkbox" value="true" id="accept" name="accept">
                                  <label class="form-check-label" for="accept">
                                    Saya menerima segala kebijakan dan bersedia tunduk / patuh terhadap segala aturan aplikasi ini.
                                  </label>
                                  @if($errors->has('accept'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$errors->first('accept') }}</strong>
                                    </span>
                                  @endif
                                </div>
                                
                              </div>
                              <div class="col-md-6 mt-3">
                                <button type="submit" class="btn btn-md btn-primary float-left">Simpan</button>
                                <button type="reset" class="btn btn-md btn-warning float-right">Reset</button>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
@endsection