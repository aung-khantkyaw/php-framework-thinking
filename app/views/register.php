    <!-- Registration form -->
    <!-- <form action="/register" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit">Register</button>
    </form> -->

    <div class="modal modal-sheet position-static d-block bg-body-secondary p-4 py-md-5" tabindex="-1" role="dialog"
        id="modalSignin">
        <div class="modal-dialog" role="document">
            <div class="modal-content rounded-4 shadow">
                <div class="modal-header p-5 pb-4 border-bottom-0">
                    <h1 class="fw-bold mb-0 fs-2">Sign up for free</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body p-5 pt-0">
                    <form class="" action="/register" method="post">
                        <div class="form-floating mb-3">
                            <input name="username" type="email" class="form-control rounded-3" id="floatingInput"
                                placeholder="username">
                            <label for="floatingInput">Username</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input name="password" type="password" class="form-control rounded-3" id="floatingPassword"
                                placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>
                        <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">Sign up</button>
                        <small class="text-body-secondary">By clicking Sign up, you agree to the terms of use.</small>
                        <hr class="my-4">
                        <h2 class="fs-5 fw-bold mb-3">Or use a third-party</h2>
                        <button class="w-100 py-2 mb-2 btn btn-outline-secondary rounded-3" type="submit">
                            <svg class="bi me-1" width="16" height="16">
                                <use xlink:href="#twitter" />
                            </svg>
                            Sign up with Twitter
                        </button>
                        <button class="w-100 py-2 mb-2 btn btn-outline-primary rounded-3" type="submit">
                            <svg class="bi me-1" width="16" height="16">
                                <use xlink:href="#facebook" />
                            </svg>
                            Sign up with Facebook
                        </button>
                        <button class="w-100 py-2 mb-2 btn btn-outline-secondary rounded-3" type="submit">
                            <svg class="bi me-1" width="16" height="16">
                                <use xlink:href="#github" />
                            </svg>
                            Sign up with GitHub
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>