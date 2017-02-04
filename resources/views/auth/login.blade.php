@extends('layouts.base')

@section('title', 'login')

@section('body')

<body class="login">
  <div id="app">
    <div class="login_wrapper">

      <div class="animate form login_form" id="login-form">
        <transition name="fade">
          <div class="alert alert-error text-error text-left alert-dismissible" role="alert" v-show="wrong" v-cloak>
            @{{ wrong_message }}
          </div>
        </transition>
        <section class="login_content">
          <form>
            <h1>Admin</h1>
            <div :class="{'text-left': true, 'has-error': errors.has('username') }">
              <span v-show="errors.has('username')" class="text-danger" v-cloak>@{{ errors.first('username') }}</span>
              <input type="text" name="username" v-model="username"  class="form-control" placeholder="Username" v-validate data-vv-rules="required"/>
            </div>
            <div :class="{'text-left': true, 'has-error': errors.has('password') }">
              <span v-show="errors.has('password')" class="text-danger" v-cloak>@{{ errors.first('password') }}</span>
              <input type="password" name="password" v-validate data-vv-rules="required" class="form-control" placeholder="Password" required="" v-model="password" />
            </div>
            <div>
              <button class="btn btn-default submit" type="submit" @click.prevent="submit">Log in</button>
            </div>
            <div class="clearfix"></div>
            <div class="separator">
              <div class="clearfix"></div>
              <br />
              <div>
                <h1><i class="fa fa-user"></i> liyu001989</h1>
                <p>©2017 liyu001989</p>
              </div>
            </div>
          </form>
        </section>
      </div>
    </div>
  </div>
</body>

@endsection

@section('js')

<script type="text/javascript">

var loginForm = new Vue({
  el: '#login-form',
  data: {
    username: '',
    password: '',
    wrong: false,
    wrong_message: ''
  },
  methods: {
    submit: function(event) {
      this.$validator.validateAll().then(success => {
        if (! success) {
            return;
        }

        this.$http.post('/login', {username: this.username, password: this.password})
          .then((response) => {
              window.location.href = '/dashboard';
          })
          .catch(function(response) {
            this.wrong = true;
            this.wrong_message = response.body.message;

            var self = this;
            setTimeout(function(){
                self.wrong = false;
                this.wrong_message = '';
            }, 3000);
          })
      });
    }
  }
})
</script>
@endsection
