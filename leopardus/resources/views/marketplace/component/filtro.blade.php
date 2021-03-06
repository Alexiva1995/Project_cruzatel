<div class="col-lg-3 col-sm-6 col-12 mt-2 menu-color text-white"> Filtros
    <div class="card h-100 mt-1 mb-1 d-flex flex-column bg-blue-dark  text-white">

        <div class="card-body">
            <div class="multi-range-price">
                <div class="multi-range-title pb-75">
                    <h6 class="filter-title mb-0 text-white">Multi Range</h6>
                </div>
                <ul class="list-unstyled price-range" id="price-range">
                    <li>
                        <span class="vs-radio-con vs-radio-primary py-25">
                            <input type="radio" name="price-range" checked="" value="false">
                            <span class="vs-radio">
                                <span class="vs-radio--border"></span>
                                <span class="vs-radio--circle"></span>
                            </span>
                            <span class="ml-50">All</span>
                        </span>
                    </li>
                    <li>
                        <span class="vs-radio-con vs-radio-primary py-25">
                            <input type="radio" name="price-range" value="false">
                            <span class="vs-radio">
                                <span class="vs-radio--border"></span>
                                <span class="vs-radio--circle"></span>
                            </span>
                            <span class="ml-50"> &lt;=$10</span>
                        </span>
                    </li>
                    <li>
                        <span class="vs-radio-con vs-radio-primary py-25">
                            <input type="radio" name="price-range" value="false">
                            <span class="vs-radio">
                                <span class="vs-radio--border"></span>
                                <span class="vs-radio--circle"></span>
                            </span>
                            <span class="ml-50">$10 - $100</span>
                        </span>
                    </li>
                    <li>
                        <span class="vs-radio-con vs-radio-primary py-25">
                            <input type="radio" name="price-range" value="false">
                            <span class="vs-radio">
                                <span class="vs-radio--border"></span>
                                <span class="vs-radio--circle"></span>
                            </span>
                            <span class="ml-50">$100 - $500</span>
                        </span>
                    </li>
                    <li>
                        <span class="vs-radio-con vs-radio-primary py-25">
                            <input type="radio" name="price-range" value="false">
                            <span class="vs-radio">
                                <span class="vs-radio--border"></span>
                                <span class="vs-radio--circle"></span>
                            </span>
                            <span class="ml-50">&gt;= $500</span>
                        </span>
                    </li>

                </ul>
            </div>
            <!-- /Price Filter -->
            <hr>
            <!-- /Price Slider -->
            <div class="price-slider">
                <div class="price-slider-title mt-1">
                    <h6 class="filter-title mb-0 text-white">Slider</h6>
                </div>
                <div class="price-slider">
                    <div class="price_slider_amount mb-2">
                    </div>
                    <div class="form-group">
                        <div class="slider-sm my-1 range-slider noUi-target noUi-ltr noUi-horizontal"
                            id="price-slider">
                            <div class="noUi-base">
                                <div class="noUi-connects">
                                    <div class="noUi-connect" style="transform: translate(0%, 0px) scale(1, 1);">
                                    </div>
                                </div>
                                <div class="noUi-origin" style="transform: translate(-1000%, 0px); z-index: 5;">
                                    <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0"
                                        role="slider" aria-orientation="horizontal" aria-valuemin="51.0"
                                        aria-valuemax="5000.0" aria-valuenow="51.0" aria-valuetext="51">
                                        <div class="noUi-touch-area"></div>
                                        <div class="noUi-tooltip">51</div>
                                    </div>
                                </div>
                                <div class="noUi-origin" style="transform: translate(0%, 0px); z-index: 4;">
                                    <div class="noUi-handle noUi-handle-upper" data-handle="1" tabindex="0"
                                        role="slider" aria-orientation="horizontal" aria-valuemin="51.0"
                                        aria-valuemax="5000.0" aria-valuenow="5000.0" aria-valuetext="5000">
                                        <div class="noUi-touch-area"></div>
                                        <div class="noUi-tooltip">5000</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Price Range -->
            <hr>
            <!-- Categories Starts -->
            <div id="product-categories">
                <div class="product-category-title">
                    <h6 class="filter-title mb-1 text-white">Categories</h6>
                </div>
                <ul class="list-unstyled categories-list">
                    <li>
                        <span class="vs-radio-con vs-radio-primary py-25">
                            <input type="radio" name="category-filter" value="false" checked="">
                            <span class="vs-radio">
                                <span class="vs-radio--border"></span>
                                <span class="vs-radio--circle"></span>
                            </span>
                            <span class="ml-50">Appliances</span>
                        </span>
                    </li>
                    <li>
                        <span class="vs-radio-con vs-radio-primary py-25">
                            <input type="radio" name="category-filter" value="false">
                            <span class="vs-radio">
                                <span class="vs-radio--border"></span>
                                <span class="vs-radio--circle"></span>
                            </span>
                            <span class="ml-50"> Audio</span>
                        </span>
                    </li>
                    <li>
                        <span class="vs-radio-con vs-radio-primary py-25">
                            <input type="radio" name="category-filter" value="false">
                            <span class="vs-radio">
                                <span class="vs-radio--border"></span>
                                <span class="vs-radio--circle"></span>
                            </span>
                            <span class="ml-50">Cameras &amp; Camcorders</span>
                        </span>
                    </li>
                    <li>
                        <span class="vs-radio-con vs-radio-primary py-25">
                            <input type="radio" name="category-filter" value="false">
                            <span class="vs-radio">
                                <span class="vs-radio--border"></span>
                                <span class="vs-radio--circle"></span>
                            </span>
                            <span class="ml-50 text-white">Car Electronics &amp; GPS</span>
                        </span>
                    </li>
                    <li>
                        <span class="vs-radio-con vs-radio-primary py-25">
                            <input type="radio" name="category-filter" value="false">
                            <span class="vs-radio">
                                <span class="vs-radio--border"></span>
                                <span class="vs-radio--circle"></span>
                            </span>
                            <span class="ml-50 text-white">Cell Phones</span>
                        </span>
                    </li>
                    <li>
                        <span class="vs-radio-con vs-radio-primary py-25">
                            <input type="radio" name="category-filter" value="false">
                            <span class="vs-radio">
                                <span class="vs-radio--border"></span>
                                <span class="vs-radio--circle"></span>
                            </span>
                            <span class="ml-50">Computers &amp; Tablets</span>
                        </span>
                    </li>
                    <li>
                        <span class="vs-radio-con vs-radio-primary py-25">
                            <input type="radio" name="category-filter" value="false">
                            <span class="vs-radio">
                                <span class="vs-radio--border"></span>
                                <span class="vs-radio--circle"></span>
                            </span>
                            <span class="ml-50"> Health, Fitness &amp; Beauty</span>
                        </span>
                    </li>
                    <li>
                        <span class="vs-radio-con vs-radio-primary py-25">
                            <input type="radio" name="category-filter" value="false">
                            <span class="vs-radio">
                                <span class="vs-radio--border"></span>
                                <span class="vs-radio--circle"></span>
                            </span>
                            <span class="ml-50">Office &amp; School Supplies</span>
                        </span>
                    </li>
                    <li>
                        <span class="vs-radio-con vs-radio-primary py-25">
                            <input type="radio" name="category-filter" value="false">
                            <span class="vs-radio">
                                <span class="vs-radio--border"></span>
                                <span class="vs-radio--circle"></span>
                            </span>
                            <span class="ml-50">TV &amp; Home Theater</span>
                        </span>
                    </li>
                    <li>
                        <span class="vs-radio-con vs-radio-primary py-25">
                            <input type="radio" name="category-filter" value="false">
                            <span class="vs-radio">
                                <span class="vs-radio--border"></span>
                                <span class="vs-radio--circle"></span>
                            </span>
                            <span class="ml-50">Video Games
                            </span>
                        </span>
                    </li>

                </ul>
            </div>
            <!-- Categories Ends -->
            <hr>
            <!-- Brands -->
            <div class="brands">
                <div class="brand-title mt-1 pb-1">
                    <h6 class="filter-title mb-0 text-white">Brands</h6>
                </div>
                <div class="brand-list" id="brands">
                    <ul class="list-unstyled">
                        <li class="d-flex justify-content-between align-items-center py-25">
                            <span class="vs-checkbox-con vs-checkbox-primary">
                                <input type="checkbox" value="false">
                                <span class="vs-checkbox">
                                    <span class="vs-checkbox--check">
                                        <i class="vs-icon feather icon-check"></i>
                                    </span>
                                </span>
                                <span class="">Insignia™</span>
                            </span>
                            <span>746</span>
                        </li>
                        <li class="d-flex justify-content-between align-items-center py-25">
                            <span class="vs-checkbox-con vs-checkbox-primary">
                                <input type="checkbox" value="false">
                                <span class="vs-checkbox">
                                    <span class="vs-checkbox--check">
                                        <i class="vs-icon feather icon-check"></i>
                                    </span>
                                </span>
                                <span class="">
                                    Samsung
                                </span>
                            </span>
                            <span>633</span>
                        </li>
                        <li class="d-flex justify-content-between align-items-center py-25">
                            <span class="vs-checkbox-con vs-checkbox-primary">
                                <input type="checkbox" value="false">
                                <span class="vs-checkbox">
                                    <span class="vs-checkbox--check">
                                        <i class="vs-icon feather icon-check"></i>
                                    </span>
                                </span>
                                <span class="">
                                    Metra
                                </span>
                            </span>
                            <span>591</span>
                        </li>
                        <li class="d-flex justify-content-between align-items-center py-25">
                            <span class="vs-checkbox-con vs-checkbox-primary">
                                <input type="checkbox" value="false">
                                <span class="vs-checkbox">
                                    <span class="vs-checkbox--check">
                                        <i class="vs-icon feather icon-check"></i>
                                    </span>
                                </span>
                                <span class="">HP</span>
                            </span>
                            <span>530</span>
                        </li>
                        <li class="d-flex justify-content-between align-items-center py-25">
                            <span class="vs-checkbox-con vs-checkbox-primary">
                                <input type="checkbox" value="false">
                                <span class="vs-checkbox">
                                    <span class="vs-checkbox--check">
                                        <i class="vs-icon feather icon-check"></i>
                                    </span>
                                </span>
                                <span class="">Apple</span>
                            </span>
                            <span>442</span>
                        </li>
                        <li class="d-flex justify-content-between align-items-center py-25">
                            <span class="vs-checkbox-con vs-checkbox-primary">
                                <input type="checkbox" value="false">
                                <span class="vs-checkbox">
                                    <span class="vs-checkbox--check">
                                        <i class="vs-icon feather icon-check"></i>
                                    </span>
                                </span>
                                <span class="">GE</span>
                            </span>
                            <span>394</span>
                        </li>
                        <li class="d-flex justify-content-between align-items-center py-25">
                            <span class="vs-checkbox-con vs-checkbox-primary">
                                <input type="checkbox" value="false">
                                <span class="vs-checkbox">
                                    <span class="vs-checkbox--check">
                                        <i class="vs-icon feather icon-check"></i>
                                    </span>
                                </span>
                                <span class="">Sony</span>
                            </span>
                            <span>350</span>
                        </li>
                        <li class="d-flex justify-content-between align-items-center py-25">
                            <span class="vs-checkbox-con vs-checkbox-primary">
                                <input type="checkbox" value="false">
                                <span class="vs-checkbox">
                                    <span class="vs-checkbox--check">
                                        <i class="vs-icon feather icon-check"></i>
                                    </span>
                                </span>
                                <span class="">Incipio</span>
                            </span>
                            <span>320</span>
                        </li>
                        <li class="d-flex justify-content-between align-items-center py-25">
                            <span class="vs-checkbox-con vs-checkbox-primary">
                                <input type="checkbox" value="false">
                                <span class="vs-checkbox">
                                    <span class="vs-checkbox--check">
                                        <i class="vs-icon feather icon-check"></i>
                                    </span>
                                </span>
                                <span class="">KitchenAid</span>
                            </span>
                            <span>318</span>
                        </li>
                        <li class="d-flex justify-content-between align-items-center py-25">
                            <span class="vs-checkbox-con vs-checkbox-primary">
                                <input type="checkbox" value="false">
                                <span class="vs-checkbox">
                                    <span class="vs-checkbox--check">
                                        <i class="vs-icon feather icon-check"></i>
                                    </span>
                                </span>
                                <span class="">Whirlpool</span>
                            </span>
                            <span>298</span>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /Brand -->
            <hr>
            <!-- Rating section starts -->
            <div id="ratings">
                <div class="ratings-title mt-1 pb-75">
                    <h6 class="filter-title mb-0">Ratings</h6>
                </div>
                <div class="d-flex justify-content-between">
                    <ul class="unstyled-list list-inline ratings-list mb-0">
                        <li class="ratings-list-item"><i class="feather icon-star text-warning"></i></li>
                        <li class="ratings-list-item"><i class="feather icon-star text-warning"></i></li>
                        <li class="ratings-list-item"><i class="feather icon-star text-warning"></i></li>
                        <li class="ratings-list-item"><i class="feather icon-star text-warning"></i></li>
                        <li class="ratings-list-item"><i class="feather icon-star text-light"></i></li>
                        <li>&amp; up</li>
                    </ul>
                    <div class="stars-received">(160)</div>
                </div>
                <div class="d-flex justify-content-between">
                    <ul class="unstyled-list list-inline ratings-list mb-0">
                        <li class="ratings-list-item"><i class="feather icon-star text-warning"></i></li>
                        <li class="ratings-list-item"><i class="feather icon-star text-warning"></i></li>
                        <li class="ratings-list-item"><i class="feather icon-star text-warning"></i></li>
                        <li class="ratings-list-item"><i class="feather icon-star text-light"></i></li>
                        <li class="ratings-list-item"><i class="feather icon-star text-light"></i></li>
                        <li>&amp; up</li>
                    </ul>
                    <div class="stars-received">(176)</div>
                </div>
                <div class="d-flex justify-content-between">
                    <ul class="unstyled-list list-inline ratings-list mb-0">
                        <li class="ratings-list-item"><i class="feather icon-star text-warning"></i></li>
                        <li class="ratings-list-item"><i class="feather icon-star text-warning"></i></li>
                        <li class="ratings-list-item"><i class="feather icon-star text-light"></i></li>
                        <li class="ratings-list-item"><i class="feather icon-star text-light"></i></li>
                        <li class="ratings-list-item"><i class="feather icon-star text-light"></i></li>
                        <li>&amp; up</li>
                    </ul>
                    <div class="stars-received">(291)</div>
                </div>
                <div class="d-flex justify-content-between">
                    <ul class="unstyled-list list-inline ratings-list mb-0 ">
                        <li class="ratings-list-item"><i class="feather icon-star text-warning"></i></li>
                        <li class="ratings-list-item"><i class="feather icon-star text-light"></i></li>
                        <li class="ratings-list-item"><i class="feather icon-star text-light"></i></li>
                        <li class="ratings-list-item"><i class="feather icon-star text-light"></i></li>
                        <li class="ratings-list-item"><i class="feather icon-star text-light"></i></li>
                        <li>&amp; up</li>
                    </ul>
                    <div class="stars-received">(190)</div>
                </div>
            </div>
            <!-- Rating section Ends -->
            <hr>
            <!-- Clear Filters Starts -->
            <div id="clear-filters">
                <button class="btn btn-block btn-primary waves-effect waves-light">CLEAR ALL FILTERS</button>
            </div>
            <!-- Clear Filters Ends -->
        </div>

    </div>
</div>