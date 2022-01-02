<div class="box">
    <div>
        <h2 class="title">Registrieren Sie sich!</h2>
    </div>
    <div class="">
        <form method="post" action="<?php $_SERVER['REQUEST_URI']; ?>">
            <div class="field">
                <label class="label">Name</label>
                <div class="control">
                    <input class="input" type="text" name="name" placeholder="Ihr Name">
                </div>
            </div>

            <div class="field">
                <label class="label">EMail</label>
                <div class="control">
                    <input class="input" type="text" name="email" placeholder="EMail">
                </div>
            </div>

            <div class="field">
                <label class="label">Passwort</label>
                <div class="control">
                    <input class="input" type="password" name="password" placeholder="Passwort">
                </div>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link" name="submit" value="submit" type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>