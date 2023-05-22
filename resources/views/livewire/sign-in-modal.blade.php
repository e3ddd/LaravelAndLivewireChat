            <div class="row" style="color: black;">
                <div class="col form">
                    <div class="row">
                        <div class="col d-flex justify-content-center">
                            <h3>Sigh In</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col d-flex justify-content-center">
                            <label for="">Enter your email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col d-flex justify-content-center">
                            <input type="email" wire:model="email">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col d-flex justify-content-center">
                            <label for="">Enter your password</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col d-flex justify-content-center">
                            <input type="password" wire:model="password">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col err">
                            <small>

                            </small>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mt-3 d-flex justify-content-center">
                            <button wire:click="signIn">Sign In</button>
                        </div>
                    </div>
                </div>
            </div>
