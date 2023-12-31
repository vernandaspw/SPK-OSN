<div>
    <main class="main-content  mt-0">
        <div class="page-header align-items-start min-vh-100"
            style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container my-auto">
                <div class="row">
                    <div class="col-lg-4 col-md-8 col-12 mx-auto">
                        <div class="card pt-5 mt-5 z-index-0 fadeIn3 fadeInBottom">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <div class=" shadow-primary border-radius-lg py-3 pe-1">
                                    <h4 class=" font-weight-bolder text-center mt-2 mb-0">Sign in</h4>
                                    <h4 class=" font-weight-bolder text-center mt-2 mb-0">SISTEM PENDUKUNG
                                        KEPUTUSAN OSN</h4>
                                    <div class="row mt-3">
                                        <img src="{{ asset('img/logo.png') }}" width="100%" class="px-5" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <form wire:submit='login' role="form" class="text-start">
                                    @if (session()->has('message'))
                                    <div class="alert alert-danger">
                                        <span class="">{{ session('message') }}</span>
                                    </div>
                                    @endif
                                    <div class="input-group input-group-outline my-3">
                                        {{-- <label class="form-label">Username</label> --}}
                                        <input required wire:model.live='username' type="text" class="form-control"
                                            placeholder="username">
                                    </div>
                                    <div class="input-group input-group-outline mb-3">
                                        {{-- <label class="form-label">Password</label> --}}
                                        <input required wire:model.live='password' type="password"
                                            placeholder="password" class="form-control">
                                    </div>
                                    <div class="form-check form-switch d-flex align-items-center mb-3">
                                        <input wire:model='rememberMe' class="form-check-input" checked type="checkbox"
                                            id="rememberMe">
                                        <label class="form-check-label mb-0 ms-2" for="rememberMe">Remember me</label>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Sign
                                            in</button>
                                    </div>
                                    <p class="mt-4 text-sm text-center">

                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
</div>
