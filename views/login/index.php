<div class="container">
    <div class="card card-container">
        <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
        <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png"/>

        <p id="profile-name" class="profile-name-card"></p>

        <form class="form-signin">
            <span id="reauth-email" class="reauth-email"></span>
            <input type="email" id="inputEmail" class="form-control" placeholder="Emailaddres" required autofocus>
            <input type="password" id="inputPassword" class="form-control" placeholder="Wachtwoord" required>

            <div id="remember" class="checkbox">
                <label>
                    <input type="checkbox" value="remember-me"> Mij onthouden
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Inloggen</button>
        </form><!-- /form -->
        <div class="row">
            <div class="col-md-8">
                <a href="#" class="forgot-password">
                    Wachtwoord vergeten
                </a>
            </div>
            <div class="col-md-4">
                <a href="#" class="forgot-password">
                    Registreren
                </a>
            </div>
        </div>
    </div><!-- /card-container -->
</div><!-- /container -->