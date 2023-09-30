@extends('admin.layout.app')

@section('heading', 'Banners')

@section('main_content')
<div class="section-body">
    <form action="{{ route('admin_banner_update') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4>Job Listing</h4>
                        <div class="form-group mb-3">
                            <label>Existing Banner</label>
                            <div><img src="{{ asset('uploads/'.$banner_data->banner_job_listing) }}" alt="" class="w_200"></div>
                        </div>
                        <div class="form-group mb-3">
                            <label>Change Banner</label>
                            <div><input type="file" name="banner_job_listing"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4>Job Detail</h4>
                        <div class="form-group mb-3">
                            <label>Existing Banner</label>
                            <div><img src="{{ asset('uploads/'.$banner_data->banner_job_detail) }}" alt="" class="w_200"></div>
                        </div>
                        <div class="form-group mb-3">
                            <label>Change Banner</label>
                            <div><input type="file" name="banner_job_detail"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4>Job Categories</h4>
                        <div class="form-group mb-3">
                            <label>Existing Banner</label>
                            <div><img src="{{ asset('uploads/'.$banner_data->banner_job_categories) }}" alt="" class="w_200"></div>
                        </div>
                        <div class="form-group mb-3">
                            <label>Change Banner</label>
                            <div><input type="file" name="banner_job_categories"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4>Company Listing</h4>
                        <div class="form-group mb-3">
                            <label>Existing Banner</label>
                            <div><img src="{{ asset('uploads/'.$banner_data->banner_company_listing) }}" alt="" class="w_200"></div>
                        </div>
                        <div class="form-group mb-3">
                            <label>Change Banner</label>
                            <div><input type="file" name="banner_company_listing"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4>Company Detail</h4>
                        <div class="form-group mb-3">
                            <label>Existing Banner</label>
                            <div><img src="{{ asset('uploads/'.$banner_data->banner_company_detail) }}" alt="" class="w_200"></div>
                        </div>
                        <div class="form-group mb-3">
                            <label>Change Banner</label>
                            <div><input type="file" name="banner_company_detail"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4>Pricing</h4>
                        <div class="form-group mb-3">
                            <label>Existing Banner</label>
                            <div><img src="{{ asset('uploads/'.$banner_data->banner_pricing) }}" alt="" class="w_200"></div>
                        </div>
                        <div class="form-group mb-3">
                            <label>Change Banner</label>
                            <div><input type="file" name="banner_pricing"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4>Blog</h4>
                        <div class="form-group mb-3">
                            <label>Existing Banner</label>
                            <div><img src="{{ asset('uploads/'.$banner_data->banner_blog) }}" alt="" class="w_200"></div>
                        </div>
                        <div class="form-group mb-3">
                            <label>Change Banner</label>
                            <div><input type="file" name="banner_blog"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4>Post</h4>
                        <div class="form-group mb-3">
                            <label>Existing Banner</label>
                            <div><img src="{{ asset('uploads/'.$banner_data->banner_post) }}" alt="" class="w_200"></div>
                        </div>
                        <div class="form-group mb-3">
                            <label>Change Banner</label>
                            <div><input type="file" name="banner_post"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4>FAQ</h4>
                        <div class="form-group mb-3">
                            <label>Existing Banner</label>
                            <div><img src="{{ asset('uploads/'.$banner_data->banner_faq) }}" alt="" class="w_200"></div>
                        </div>
                        <div class="form-group mb-3">
                            <label>Change Banner</label>
                            <div><input type="file" name="banner_faq"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4>Contact</h4>
                        <div class="form-group mb-3">
                            <label>Existing Banner</label>
                            <div><img src="{{ asset('uploads/'.$banner_data->banner_contact) }}" alt="" class="w_200"></div>
                        </div>
                        <div class="form-group mb-3">
                            <label>Change Banner</label>
                            <div><input type="file" name="banner_contact"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4>Terms</h4>
                        <div class="form-group mb-3">
                            <label>Existing Banner</label>
                            <div><img src="{{ asset('uploads/'.$banner_data->banner_terms) }}" alt="" class="w_200"></div>
                        </div>
                        <div class="form-group mb-3">
                            <label>Change Banner</label>
                            <div><input type="file" name="banner_terms"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4>Privacy</h4>
                        <div class="form-group mb-3">
                            <label>Existing Banner</label>
                            <div><img src="{{ asset('uploads/'.$banner_data->banner_privacy) }}" alt="" class="w_200"></div>
                        </div>
                        <div class="form-group mb-3">
                            <label>Change Banner</label>
                            <div><input type="file" name="banner_privacy"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4>Sign Up</h4>
                        <div class="form-group mb-3">
                            <label>Existing Banner</label>
                            <div><img src="{{ asset('uploads/'.$banner_data->banner_signup) }}" alt="" class="w_200"></div>
                        </div>
                        <div class="form-group mb-3">
                            <label>Change Banner</label>
                            <div><input type="file" name="banner_signup"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4>Login</h4>
                        <div class="form-group mb-3">
                            <label>Existing Banner</label>
                            <div><img src="{{ asset('uploads/'.$banner_data->banner_login) }}" alt="" class="w_200"></div>
                        </div>
                        <div class="form-group mb-3">
                            <label>Change Banner</label>
                            <div><input type="file" name="banner_login"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4>Forget Password</h4>
                        <div class="form-group mb-3">
                            <label>Existing Banner</label>
                            <div><img src="{{ asset('uploads/'.$banner_data->banner_forget_password) }}" alt="" class="w_200"></div>
                        </div>
                        <div class="form-group mb-3">
                            <label>Change Banner</label>
                            <div><input type="file" name="banner_forget_password"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4>Company Panel</h4>
                        <div class="form-group mb-3">
                            <label>Existing Banner</label>
                            <div><img src="{{ asset('uploads/'.$banner_data->banner_company_panel) }}" alt="" class="w_200"></div>
                        </div>
                        <div class="form-group mb-3">
                            <label>Change Banner</label>
                            <div><input type="file" name="banner_company_panel"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4>Candidate Panel</h4>
                        <div class="form-group mb-3">
                            <label>Existing Banner</label>
                            <div><img src="{{ asset('uploads/'.$banner_data->banner_candidate_panel) }}" alt="" class="w_200"></div>
                        </div>
                        <div class="form-group mb-3">
                            <label>Change Banner</label>
                            <div><input type="file" name="banner_candidate_panel"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</div>
@endsection