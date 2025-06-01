<x-app-layout>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.settings.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Brand Settings -->
                <div class="row">
                    <div class="col-12">
                        <h4 class="mb-3">Brand Settings</h4>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <x-input-label name="brand_name" text="Brand Name" />
                            <x-input-field name="brand_name" type="text"
                                value="{{ old('brand_name', $setting->brand_name ?? '') }}"
                                placeholder="Enter Brand name" />
                        </div>
                    </div>
                </div>

                <!-- Brand Images -->
                <div class="row mt-4 justify-items-center">
                    <div class="col-12">
                        <h4 class="mb-3">Brand Images</h4>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="logo" class="form-label">Logo</label>
                            <div class="form-control d-flex justify-content-center align-items-center my-1"
                                style="height: 100px">
                                @if (isset($setting->logo))
                                    <img src="{{ asset($setting->logo) }}" alt="Logo" height="60">
                                @endif
                            </div>
                            <input type="file" class="form-control" name="logo" accept="image/*">
                            @error('logo')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="favicon" class="form-label">Favicon</label>
                            <div class="form-control d-flex justify-content-center align-items-center my-1"
                                style="height: 100px">
                                @if (isset($setting->favicon))
                                    <img src="{{ asset($setting->favicon) }}" alt="Favicon" height="32">
                                @endif
                            </div>
                            <input type="file" class="form-control" name="favicon" accept="image/x-icon,image/png">
                            @error('favicon')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Contact Information -->
                <div class="row mt-4">
                    <div class="col-12">
                        <h4 class="mb-3">Contact Information</h4>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <x-input-label name="contact_email" text="Contact Email" />
                            <x-input-field name="contact_email" type="text"
                                value="{{ old('contact_email', $setting->contact_email ?? '') }}"
                                placeholder="example@gmail.com" />
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <x-input-label name="contact_phone" text="Contact Phone" />
                            <x-input-field name="contact_phone" type="text"
                                value="{{ old('contact_phone', $setting->contact_phone ?? '') }}"
                                placeholder="+91-9919xxxx55" />
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="contact_address" class="form-label">Contact Address</label>
                            <textarea class="form-control @error('contact_address') is-invalid @enderror" id="contact_address"
                                name="contact_address" rows="3" required>{{ old('contact_address', $setting->contact_address ?? '') }}</textarea>
                            @error('contact_address')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Social Media Links -->
                <div class="row mt-4">
                    <div class="col-12">
                        <h4 class="mb-3">Social Media Links</h4>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-3">
                            <label for="facebook_link" class="form-label">Facebook</label>
                            <input type="url" class="form-control @error('facebook_link') is-invalid @enderror"
                                id="facebook_link" name="facebook_link"
                                value="{{ old('facebook_link', $setting->facebook_link ?? '') }}">
                            @error('facebook_link')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-3">
                            <label for="twitter_link" class="form-label">Twitter</label>
                            <input type="url" class="form-control @error('twitter_link') is-invalid @enderror"
                                id="twitter_link" name="twitter_link"
                                value="{{ old('twitter_link', $setting->twitter_link ?? '') }}">
                            @error('twitter_link')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-3">
                            <label for="instagram_link" class="form-label">Instagram</label>
                            <input type="url" class="form-control @error('instagram_link') is-invalid @enderror"
                                id="instagram_link" name="instagram_link"
                                value="{{ old('instagram_link', $setting->instagram_link ?? '') }}">
                            @error('instagram_link')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-3">
                            <label for="linkedin_link" class="form-label">LinkedIn</label>
                            <input type="url" class="form-control @error('linkedin_link') is-invalid @enderror"
                                id="linkedin_link" name="linkedin_link"
                                value="{{ old('linkedin_link', $setting->linkedin_link ?? '') }}">
                            @error('linkedin_link')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Meta Information -->
                <div class="row mt-4">
                    <div class="col-12">
                        <h4 class="mb-3">Meta Information</h4>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="meta_title" class="form-label">Meta Title</label>
                            <input type="text" class="form-control @error('meta_title') is-invalid @enderror"
                                id="meta_title" name="meta_title"
                                value="{{ old('meta_title', $setting->meta_title ?? '') }}" required>
                            @error('meta_title')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="meta_description" class="form-label">Meta Description</label>
                            <textarea class="form-control @error('meta_description') is-invalid @enderror" id="meta_description"
                                name="meta_description" rows="2" required>{{ old('meta_description', $setting->meta_description ?? '') }}</textarea>
                            @error('meta_description')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="meta_keywords" class="form-label">Meta Keywords</label>
                            <textarea class="form-control @error('meta_keywords') is-invalid @enderror" id="meta_keywords" name="meta_keywords"
                                rows="2" required>{{ old('meta_keywords', $setting->meta_keywords ?? '') }}</textarea>
                            @error('meta_keywords')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>


                <div class="mt-4">
                    <button type="submit" class="btn btn-primary">Update Settings</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
