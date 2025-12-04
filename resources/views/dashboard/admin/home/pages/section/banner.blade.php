<div class="accordion-item">
    <h2 class="accordion-header" id="headingBanner">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBanner" aria-expanded="true" aria-controls="collapseBanner">
            Banner Section
        </button>
    </h2>
    <div id="collapseBanner" class="accordion-collapse collapse show" aria-labelledby="headingBanner" data-bs-parent="#homeContentAccordion">
        <div class="accordion-body">
            <div class="d-flex justify-content-end mb-3">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addBannerModal">
                    Add Banner Content
                </button>
            </div>

            <div class="table-responsive" style="overflow-x: auto;">
                <table class="table table-bordered table-sm" style="white-space: nowrap;">
                    <thead>
                        <tr>
                            <th style="white-space: nowrap;">Left Text Path</th>
                            <th style="white-space: nowrap;">Left H1</th>
                            <th style="white-space: nowrap;">Left P</th>
                            <th style="white-space: nowrap;">Left Link</th>
                            <th style="white-space: nowrap;">Middle Span</th>
                            <th style="white-space: nowrap;">Middle Image</th>
                            <th style="white-space: nowrap;">Right Image</th>
                            <th style="white-space: nowrap;">Right Text Path</th>
                            <th style="white-space: nowrap;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($home)
                        <tr>
                            <td>{{ Str::limit($home->home_banner_leftCard_textpath, 20) }}</td>
                            <td>{{ Str::limit($home->home_banner_leftCard_h1, 20) }}</td>
                            <td>{{ Str::limit($home->home_banner_leftCard_p, 30) }}</td>
                            <td>{{ Str::limit($home->home_banner_leftCard_a, 20) }}</td>
                            <td>{{ Str::limit($home->home_banner_middleCard_span, 20) }}</td>
                            <td>
                                @if($home->home_banner_middleCard_img)
                                <img src="{{ asset('storage/' . $home->home_banner_middleCard_img) }}" width="50" alt="Middle Img">
                                @else
                                <span class="text-muted">N/A</span>
                                @endif
                            </td>
                            <td>
                                @if($home->home_banner_rightCard_img)
                                <img src="{{ asset('storage/' . $home->home_banner_rightCard_img) }}" width="50" alt="Right Img">
                                @else
                                <span class="text-muted">N/A</span>
                                @endif
                            </td>
                            <td>{{ Str::limit($home->home_banner_rightCard_textpath, 20) }}</td>
                            <td class="text-nowrap">
                                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editBannerModal">
                                    <i class="fa fa-edit"></i> Edit
                                </button>
                                <form action="{{ route('home-content.destroy', $home->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Del</button>
                                </form>
                            </td>
                        </tr>
                        @else
                        <tr>
                            <td colspan="9" class="text-center">No banner content found.</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Add Banner Modal -->
<div class="modal fade" id="addBannerModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="{{ route('home-content.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">Add Banner Content</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Left Card Text Path</label>
                            <input type="text" name="home_banner_leftCard_textpath" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Left Card H1</label>
                            <input type="text" name="home_banner_leftCard_h1" class="form-control">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label">Left Card Paragraph</label>
                            <textarea name="home_banner_leftCard_p" class="form-control" rows="3"></textarea>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Left Card Link (a)</label>
                            <input type="text" name="home_banner_leftCard_a" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Middle Card Span</label>
                            <input type="text" name="home_banner_middleCard_span" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Middle Card Image</label>
                            <input type="file" name="home_banner_middleCard_img" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Right Card Image</label>
                            <input type="file" name="home_banner_rightCard_img" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Right Card Text Path</label>
                            <input type="text" name="home_banner_rightCard_textpath" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Banner Modal -->
@if($home)
<div class="modal fade" id="editBannerModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="{{ route('home-content.update', $home->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title">Edit Banner Content</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Left Card Text Path</label>
                            <input type="text" name="home_banner_leftCard_textpath" class="form-control" value="{{ $home->home_banner_leftCard_textpath }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Left Card H1</label>
                            <input type="text" name="home_banner_leftCard_h1" class="form-control" value="{{ $home->home_banner_leftCard_h1 }}">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label">Left Card Paragraph</label>
                            <textarea name="home_banner_leftCard_p" class="form-control" rows="3">{{ $home->home_banner_leftCard_p }}</textarea>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Left Card Link (a)</label>
                            <input type="text" name="home_banner_leftCard_a" class="form-control" value="{{ $home->home_banner_leftCard_a }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Middle Card Span</label>
                            <input type="text" name="home_banner_middleCard_span" class="form-control" value="{{ $home->home_banner_middleCard_span }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Middle Card Image</label>
                            <input type="file" name="home_banner_middleCard_img" class="form-control">
                            @if($home->home_banner_middleCard_img)
                            <img src="{{ asset('storage/' . $home->home_banner_middleCard_img) }}" width="50" class="mt-2">
                            @endif
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Right Card Image</label>
                            <input type="file" name="home_banner_rightCard_img" class="form-control">
                            @if($home->home_banner_rightCard_img)
                            <img src="{{ asset('storage/' . $home->home_banner_rightCard_img) }}" width="50" class="mt-2">
                            @endif
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Right Card Text Path</label>
                            <input type="text" name="home_banner_rightCard_textpath" class="form-control" value="{{ $home->home_banner_rightCard_textpath }}">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endif