
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h6 class="page-title">Dashboard</h6>
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active">Welcome to Veltrix Dashboard</li>
                    </ol>
                </div>
                <div class="col-md-4">
                    <div class="float-end d-none d-md-block">
                        <div class="dropdown">
                            <button class="btn btn-primary  dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-cog me-2"></i> Settings
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat bg-primary text-white">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="float-start mini-stat-img me-4">
                                <img src="{{asset('backend/images/01.png')}}" alt="">
                            </div>
                            <h5 class="font-size-16 text-uppercase text-white-50">Orders</h5>
                            <h4 class="fw-medium font-size-24">1,685 <i class="mdi mdi-arrow-up text-success ms-2"></i></h4>
                            <div class="mini-stat-label bg-success">
                                <p class="mb-0">+ 12%</p>
                            </div>
                        </div>
                        <div class="pt-2">
                            <div class="float-end">
                                <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5 text-white-50"></i></a>
                            </div>

                            <p class="text-white-50 mb-0 mt-1">Since last month</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat bg-primary text-white">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="float-start mini-stat-img me-4">
                                <img src="{{asset('backend/images/02.png')}}" alt="">
                            </div>
                            <h5 class="font-size-16 text-uppercase text-white-50">Revenue</h5>
                            <h4 class="fw-medium font-size-24">52,368 <i class="mdi mdi-arrow-down text-danger ms-2"></i></h4>
                            <div class="mini-stat-label bg-danger">
                                <p class="mb-0">- 28%</p>
                            </div>
                        </div>
                        <div class="pt-2">
                            <div class="float-end">
                                <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5 text-white-50"></i></a>
                            </div>

                            <p class="text-white-50 mb-0 mt-1">Since last month</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat bg-primary text-white">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="float-start mini-stat-img me-4">
                                <img src="{{asset('backend/images/03.png')}}" alt="">
                            </div>
                            <h5 class="font-size-16 text-uppercase text-white-50">Average Price</h5>
                            <h4 class="fw-medium font-size-24">15.8 <i class="mdi mdi-arrow-up text-success ms-2"></i></h4>
                            <div class="mini-stat-label bg-info">
                                <p class="mb-0"> 00%</p>
                            </div>
                        </div>
                        <div class="pt-2">
                            <div class="float-end">
                                <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5 text-white-50"></i></a>
                            </div>

                            <p class="text-white-50 mb-0 mt-1">Since last month</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat bg-primary text-white">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="float-start mini-stat-img me-4">
                                <img src="{{asset('backend/images/04.png')}}" alt="">
                            </div>
                            <h5 class="font-size-16 text-uppercase text-white-50">Product Sold</h5>
                            <h4 class="fw-medium font-size-24">2436 <i class="mdi mdi-arrow-up text-success ms-2"></i></h4>
                            <div class="mini-stat-label bg-warning">
                                <p class="mb-0">+ 84%</p>
                            </div>
                        </div>
                        <div class="pt-2">
                            <div class="float-end">
                                <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5 text-white-50"></i></a>
                            </div>

                            <p class="text-white-50 mb-0 mt-1">Since last month</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-xl-9">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Monthly Earning</h4>
                        <div class="row">
                            <div class="col-lg-7">
                                <div>
                                    <div id="chart-with-area" class="ct-chart earning ct-golden-section">
                                    <div class="chartist-tooltip" style="top: -14.5625px; left: 365px;"></div><svg xmlns:ct="#" width="100%" height="100%" class="ct-chart-line" style="width: 100%; height: 100%;"><g class="ct-grids"><line x1="50" x2="50" y1="15" y2="229.109375" class="ct-grid ct-horizontal"></line><line x1="95.29296875" x2="95.29296875" y1="15" y2="229.109375" class="ct-grid ct-horizontal"></line><line x1="140.5859375" x2="140.5859375" y1="15" y2="229.109375" class="ct-grid ct-horizontal"></line><line x1="185.87890625" x2="185.87890625" y1="15" y2="229.109375" class="ct-grid ct-horizontal"></line><line x1="231.171875" x2="231.171875" y1="15" y2="229.109375" class="ct-grid ct-horizontal"></line><line x1="276.46484375" x2="276.46484375" y1="15" y2="229.109375" class="ct-grid ct-horizontal"></line><line x1="321.7578125" x2="321.7578125" y1="15" y2="229.109375" class="ct-grid ct-horizontal"></line><line x1="367.05078125" x2="367.05078125" y1="15" y2="229.109375" class="ct-grid ct-horizontal"></line><line y1="229.109375" y2="229.109375" x1="50" x2="412.34375" class="ct-grid ct-vertical"></line><line y1="205.31944444444446" y2="205.31944444444446" x1="50" x2="412.34375" class="ct-grid ct-vertical"></line><line y1="181.52951388888889" y2="181.52951388888889" x1="50" x2="412.34375" class="ct-grid ct-vertical"></line><line y1="157.73958333333331" y2="157.73958333333331" x1="50" x2="412.34375" class="ct-grid ct-vertical"></line><line y1="133.94965277777777" y2="133.94965277777777" x1="50" x2="412.34375" class="ct-grid ct-vertical"></line><line y1="110.15972222222223" y2="110.15972222222223" x1="50" x2="412.34375" class="ct-grid ct-vertical"></line><line y1="86.36979166666666" y2="86.36979166666666" x1="50" x2="412.34375" class="ct-grid ct-vertical"></line><line y1="62.579861111111114" y2="62.579861111111114" x1="50" x2="412.34375" class="ct-grid ct-vertical"></line><line y1="38.78993055555554" y2="38.78993055555554" x1="50" x2="412.34375" class="ct-grid ct-vertical"></line><line y1="15" y2="15" x1="50" x2="412.34375" class="ct-grid ct-vertical"></line></g><g><g class="ct-series ct-series-a"><path d="M50,229.109L50,110.16C65.098,78.44,80.195,15,95.293,15C110.391,15,125.488,62.58,140.586,62.58C155.684,62.58,170.781,38.79,185.879,38.79C200.977,38.79,216.074,91.128,231.172,110.16C246.27,129.192,261.367,157.74,276.465,157.74C291.563,157.74,306.66,110.16,321.758,110.16C336.855,110.16,351.953,126.02,367.051,133.95L367.051,229.109Z" class="ct-area"></path><path d="M50,110.16C65.098,78.44,80.195,15,95.293,15C110.391,15,125.488,62.58,140.586,62.58C155.684,62.58,170.781,38.79,185.879,38.79C200.977,38.79,216.074,91.128,231.172,110.16C246.27,129.192,261.367,157.74,276.465,157.74C291.563,157.74,306.66,110.16,321.758,110.16C336.855,110.16,351.953,126.02,367.051,133.95" class="ct-line"></path><line x1="50" y1="110.15972222222223" x2="50.01" y2="110.15972222222223" class="ct-point" ct:value="5"></line><line x1="95.29296875" y1="15" x2="95.30296875" y2="15" class="ct-point" ct:value="9"></line><line x1="140.5859375" y1="62.579861111111114" x2="140.5959375" y2="62.579861111111114" class="ct-point" ct:value="7"></line><line x1="185.87890625" y1="38.78993055555554" x2="185.88890625" y2="38.78993055555554" class="ct-point" ct:value="8"></line><line x1="231.171875" y1="110.15972222222223" x2="231.181875" y2="110.15972222222223" class="ct-point" ct:value="5"></line><line x1="276.46484375" y1="157.73958333333331" x2="276.47484375" y2="157.73958333333331" class="ct-point" ct:value="3"></line><line x1="321.7578125" y1="110.15972222222223" x2="321.7678125" y2="110.15972222222223" class="ct-point" ct:value="5"></line><line x1="367.05078125" y1="133.94965277777777" x2="367.06078125" y2="133.94965277777777" class="ct-point" ct:value="4"></line></g></g><g class="ct-labels"><foreignobject style="overflow: visible;" x="50" y="234.109375" width="45.29296875" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 45px; height: 20px;">1</span></foreignobject><foreignobject style="overflow: visible;" x="95.29296875" y="234.109375" width="45.29296875" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 45px; height: 20px;">2</span></foreignobject><foreignobject style="overflow: visible;" x="140.5859375" y="234.109375" width="45.29296875" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 45px; height: 20px;">3</span></foreignobject><foreignobject style="overflow: visible;" x="185.87890625" y="234.109375" width="45.29296875" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 45px; height: 20px;">4</span></foreignobject><foreignobject style="overflow: visible;" x="231.171875" y="234.109375" width="45.29296875" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 45px; height: 20px;">5</span></foreignobject><foreignobject style="overflow: visible;" x="276.46484375" y="234.109375" width="45.29296875" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 45px; height: 20px;">6</span></foreignobject><foreignobject style="overflow: visible;" x="321.7578125" y="234.109375" width="45.29296875" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 45px; height: 20px;">7</span></foreignobject><foreignobject style="overflow: visible;" x="367.05078125" y="234.109375" width="45.29296875" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 45px; height: 20px;">8</span></foreignobject><foreignobject style="overflow: visible;" y="205.31944444444446" x="10" height="23.789930555555557" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">0</span></foreignobject><foreignobject style="overflow: visible;" y="181.5295138888889" x="10" height="23.789930555555557" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">1</span></foreignobject><foreignobject style="overflow: visible;" y="157.73958333333331" x="10" height="23.789930555555557" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">2</span></foreignobject><foreignobject style="overflow: visible;" y="133.94965277777777" x="10" height="23.789930555555557" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">3</span></foreignobject><foreignobject style="overflow: visible;" y="110.15972222222223" x="10" height="23.789930555555543" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">4</span></foreignobject><foreignobject style="overflow: visible;" y="86.36979166666666" x="10" height="23.78993055555557" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">5</span></foreignobject><foreignobject style="overflow: visible;" y="62.579861111111114" x="10" height="23.789930555555543" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">6</span></foreignobject><foreignobject style="overflow: visible;" y="38.78993055555554" x="10" height="23.78993055555557" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">7</span></foreignobject><foreignobject style="overflow: visible;" y="15" x="10" height="23.789930555555543" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">8</span></foreignobject><foreignobject style="overflow: visible;" y="-15" x="10" height="30" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 30px;">9</span></foreignobject></g></svg></div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="text-center">
                                            <p class="text-muted mb-4">This month</p>
                                            <h3>$34,252</h3>
                                            <p class="text-muted mb-5">It will be as simple as in fact it
                                                will be occidental.</p>
                                            <span class="peity-donut" data-peity="{ &quot;fill&quot;: [&quot;#02a499&quot;, &quot;#f2f2f2&quot;], &quot;innerRadius&quot;: 28, &quot;radius&quot;: 32 }" data-width="72" data-height="72" style="display: none;">4/5</span><svg class="peity" height="72" width="72"><path d="M 36 0 A 36 36 0 1 1 1.7619654133744689 24.875388202501895 L 9.370417543735698 27.347524157501475 A 28 28 0 1 0 36 8" data-value="4" fill="#02a499"></path><path d="M 1.7619654133744689 24.875388202501895 A 36 36 0 0 1 35.99999999999999 0 L 35.99999999999999 8 A 28 28 0 0 0 9.370417543735698 27.347524157501475" data-value="1" fill="#f2f2f2"></path></svg>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="text-center">
                                            <p class="text-muted mb-4">Last month</p>
                                            <h3>$36,253</h3>
                                            <p class="text-muted mb-5">It will be as simple as in fact it
                                                will be occidental.</p>
                                            <span class="peity-donut" data-peity="{ &quot;fill&quot;: [&quot;#02a499&quot;, &quot;#f2f2f2&quot;], &quot;innerRadius&quot;: 28, &quot;radius&quot;: 32 }" data-width="72" data-height="72" style="display: none;">3/5</span><svg class="peity" height="72" width="72"><path d="M 36 0 A 36 36 0 1 1 14.83973091747097 65.1246117974981 L 19.542012935810757 58.65247584249853 A 28 28 0 1 0 36 8" data-value="3" fill="#02a499"></path><path d="M 14.83973091747097 65.1246117974981 A 36 36 0 0 1 35.99999999999999 0 L 35.99999999999999 8 A 28 28 0 0 0 19.542012935810757 58.65247584249853" data-value="2" fill="#f2f2f2"></path></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                </div>
                <!-- end card -->
            </div>

            <div class="col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <h4 class="card-title mb-4">Sales Analytics</h4>
                        </div>
                        <div class="wid-peity mb-4">
                            <div class="row">
                                <div class="col-md-6">
                                    <div>
                                        <p class="text-muted">Online</p>
                                        <h5 class="mb-4">1,542</h5>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <span class="peity-line" data-width="100%" data-peity="{ &quot;fill&quot;: [&quot;rgba(2, 164, 153,0.3)&quot;],&quot;stroke&quot;: [&quot;rgba(2, 164, 153,0.8)&quot;]}" data-height="60" style="display: none;">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span><svg class="peity" height="60" width="100%"><polygon fill="rgba(2, 164, 153,0.3)" points="0 59.5 0 20.16666666666667 4.822368421052632 46.388888888888886 9.644736842105264 7.055555555555557 14.467105263157896 33.27777777777778 19.289473684210527 39.833333333333336 24.111842105263158 7.055555555555557 28.93421052631579 52.94444444444444 33.756578947368425 39.833333333333336 38.578947368421055 20.16666666666667 43.401315789473685 26.72222222222222 48.223684210526315 0.5 53.04605263157895 46.388888888888886 57.86842105263158 7.055555555555557 62.69078947368421 52.94444444444444 67.51315789473685 33.27777777777778 72.33552631578948 7.055555555555557 77.15789473684211 0.5 81.98026315789474 7.055555555555557 86.80263157894737 46.388888888888886 91.625 52.94444444444444 91.625 59.5"></polygon><polyline fill="none" points="0 20.16666666666667 4.822368421052632 46.388888888888886 9.644736842105264 7.055555555555557 14.467105263157896 33.27777777777778 19.289473684210527 39.833333333333336 24.111842105263158 7.055555555555557 28.93421052631579 52.94444444444444 33.756578947368425 39.833333333333336 38.578947368421055 20.16666666666667 43.401315789473685 26.72222222222222 48.223684210526315 0.5 53.04605263157895 46.388888888888886 57.86842105263158 7.055555555555557 62.69078947368421 52.94444444444444 67.51315789473685 33.27777777777778 72.33552631578948 7.055555555555557 77.15789473684211 0.5 81.98026315789474 7.055555555555557 86.80263157894737 46.388888888888886 91.625 52.94444444444444" stroke="rgba(2, 164, 153,0.8)" stroke-width="1" stroke-linecap="square"></polyline></svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wid-peity mb-4">
                            <div class="row">
                                <div class="col-md-6">
                                    <div>
                                        <p class="text-muted">Offline</p>
                                        <h5 class="mb-4">6,451</h5>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <span class="peity-line" data-width="100%" data-peity="{ &quot;fill&quot;: [&quot;rgba(2, 164, 153,0.3)&quot;],&quot;stroke&quot;: [&quot;rgba(2, 164, 153,0.8)&quot;]}" data-height="60" style="display: none;">6,2,8,4,-3,8,1,-3,6,-5,9,2,-8,1,4,8,9,8,2,1</span><svg class="peity" height="60" width="100%"><polygon fill="rgba(2, 164, 153,0.3)" points="0 31.735294117647058 0 10.911764705882355 4.822368421052632 24.79411764705882 9.644736842105264 3.970588235294116 14.467105263157896 17.852941176470587 19.289473684210527 42.147058823529406 24.111842105263158 3.970588235294116 28.93421052631579 28.264705882352942 33.756578947368425 42.147058823529406 38.578947368421055 10.911764705882355 43.401315789473685 49.088235294117645 48.223684210526315 0.5 53.04605263157895 24.79411764705882 57.86842105263158 59.5 62.69078947368421 28.264705882352942 67.51315789473685 17.852941176470587 72.33552631578948 3.970588235294116 77.15789473684211 0.5 81.98026315789474 3.970588235294116 86.80263157894737 24.79411764705882 91.625 28.264705882352942 91.625 31.735294117647058"></polygon><polyline fill="none" points="0 10.911764705882355 4.822368421052632 24.79411764705882 9.644736842105264 3.970588235294116 14.467105263157896 17.852941176470587 19.289473684210527 42.147058823529406 24.111842105263158 3.970588235294116 28.93421052631579 28.264705882352942 33.756578947368425 42.147058823529406 38.578947368421055 10.911764705882355 43.401315789473685 49.088235294117645 48.223684210526315 0.5 53.04605263157895 24.79411764705882 57.86842105263158 59.5 62.69078947368421 28.264705882352942 67.51315789473685 17.852941176470587 72.33552631578948 3.970588235294116 77.15789473684211 0.5 81.98026315789474 3.970588235294116 86.80263157894737 24.79411764705882 91.625 28.264705882352942" stroke="rgba(2, 164, 153,0.8)" stroke-width="1" stroke-linecap="square"></polyline></svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="row">
                                <div class="col-md-6">
                                    <div>
                                        <p class="text-muted">Marketing</p>
                                        <h5>84,574</h5>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <span class="peity-line" data-width="100%" data-peity="{ &quot;fill&quot;: [&quot;rgba(2, 164, 153,0.3)&quot;],&quot;stroke&quot;: [&quot;rgba(2, 164, 153,0.8)&quot;]}" data-height="60" style="display: none;">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span><svg class="peity" height="60" width="100%"><polygon fill="rgba(2, 164, 153,0.3)" points="0 59.5 0 20.16666666666667 4.822368421052632 46.388888888888886 9.644736842105264 7.055555555555557 14.467105263157896 33.27777777777778 19.289473684210527 39.833333333333336 24.111842105263158 7.055555555555557 28.93421052631579 52.94444444444444 33.756578947368425 39.833333333333336 38.578947368421055 20.16666666666667 43.401315789473685 26.72222222222222 48.223684210526315 0.5 53.04605263157895 46.388888888888886 57.86842105263158 7.055555555555557 62.69078947368421 52.94444444444444 67.51315789473685 33.27777777777778 72.33552631578948 7.055555555555557 77.15789473684211 0.5 81.98026315789474 7.055555555555557 86.80263157894737 46.388888888888886 91.625 52.94444444444444 91.625 59.5"></polygon><polyline fill="none" points="0 20.16666666666667 4.822368421052632 46.388888888888886 9.644736842105264 7.055555555555557 14.467105263157896 33.27777777777778 19.289473684210527 39.833333333333336 24.111842105263158 7.055555555555557 28.93421052631579 52.94444444444444 33.756578947368425 39.833333333333336 38.578947368421055 20.16666666666667 43.401315789473685 26.72222222222222 48.223684210526315 0.5 53.04605263157895 46.388888888888886 57.86842105263158 7.055555555555557 62.69078947368421 52.94444444444444 67.51315789473685 33.27777777777778 72.33552631578948 7.055555555555557 77.15789473684211 0.5 81.98026315789474 7.055555555555557 86.80263157894737 46.388888888888886 91.625 52.94444444444444" stroke="rgba(2, 164, 153,0.8)" stroke-width="1" stroke-linecap="square"></polyline></svg>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Sales Report</h4>

                        <div class="cleafix">
                            <p class="float-start"><i class="mdi mdi-calendar me-1 text-primary"></i> Jan 01
                                - Jan 31</p>
                            <h5 class="font-18 text-end">$4230</h5>
                        </div>

                        <div id="ct-donut" class="ct-chart wid"><div class="chartist-tooltip"></div><svg xmlns:ct="#" width="100%" height="100%" class="ct-chart-donut" style="width: 100%; height: 100%;"><g class="ct-series ct-series-a"><path d="M84.291,185.845A68.625,68.625,0,1,0,103.625,51.375" class="ct-slice-donut" ct:value="54" style="stroke-width: 60px;"></path></g><g class="ct-series ct-series-b"><path d="M43.135,87.59A68.625,68.625,0,0,0,84.521,185.912" class="ct-slice-donut" ct:value="28" style="stroke-width: 60px;"></path></g><g class="ct-series ct-series-c"><path d="M103.625,51.375A68.625,68.625,0,0,0,43.023,87.802" class="ct-slice-donut" ct:value="17" style="stroke-width: 60px;"></path></g></svg></div>

                        <div class="mt-4">
                            <table class="table mb-0">
                                <tbody>
                                    <tr>
                                        <td><span class="badge bg-primary">Desk</span></td>
                                        <td>Desktop</td>
                                        <td class="text-end">54.5%</td>
                                    </tr>
                                    <tr>
                                        <td><span class="badge bg-success">Mob</span></td>
                                        <td>Mobile</td>
                                        <td class="text-end">28.0%</td>
                                    </tr>
                                    <tr>
                                        <td><span class="badge bg-warning">Tab</span></td>
                                        <td>Tablets</td>
                                        <td class="text-end">17.5%</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Activity</h4>
                        <ol class="activity-feed">
                            <li class="feed-item">
                                <div class="feed-item-list">
                                    <span class="date">Jan 22</span>
                                    <span class="activity-text">Responded to need “Volunteer
                                        Activities”</span>
                                </div>
                            </li>
                            <li class="feed-item">
                                <div class="feed-item-list">
                                    <span class="date">Jan 20</span>
                                    <span class="activity-text">At vero eos et accusamus et iusto odio
                                        dignissimos ducimus qui deleniti atque...<a href="#" class="text-success">Read more</a></span>
                                </div>
                            </li>
                            <li class="feed-item">
                                <div class="feed-item-list">
                                    <span class="date">Jan 19</span>
                                    <span class="activity-text">Joined the group “Boardsmanship
                                        Forum”</span>
                                </div>
                            </li>
                            <li class="feed-item">
                                <div class="feed-item-list">
                                    <span class="date">Jan 17</span>
                                    <span class="activity-text">Responded to need “In-Kind
                                        Opportunity”</span>
                                </div>
                            </li>
                            <li class="feed-item">
                                <div class="feed-item-list">
                                    <span class="date">Jan 16</span>
                                    <span class="activity-text">Sed ut perspiciatis unde omnis iste natus
                                        error sit rem.</span>
                                </div>
                            </li>
                        </ol>
                        <div class="text-center">
                            <a href="#" class="btn btn-primary">Load More</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-5">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card text-center">
                            <div class="card-body">
                                <div class="py-4">
                                    <i class="ion ion-ios-checkmark-circle-outline display-4 text-success"></i>

                                    <h5 class="text-primary mt-4">Order Successful</h5>
                                    <p class="text-muted">Thanks you so much for your order.</p>
                                    <div class="mt-4">
                                        <a href="" class="btn btn-primary btn-sm">Chack Status</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="card bg-primary product-sale">
                            <div class="card-body">
                                <div class="text-center text-white py-4">
                                    <h5 class="mb-4 text-white-50 font-size-16">Top Product Sale</h5>
                                    <h1>1452</h1>
                                    <p class="font-size-14 pt-1">Computer</p>
                                    <p class="text-white-50 mb-0">At solmen va esser necessi far uniform
                                        myth... <a href="#" class="text-white">View more</a></p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Client Reviews</h4>
                                <p class="text-muted mb-3 pb-4">" Everyone realizes why a new common
                                    language would be desirable one could refuse to pay expensive
                                    translators it would be necessary. "</p>
                                <div class="float-end mt-2">
                                    <a href="#" class="text-primary">
                                        <i class="mdi mdi-arrow-right fs-5"></i>
                                    </a>
                                </div>
                                <h6 class="mb-0"><img src="{{asset('backend/images/user-3.jpg')}}" alt="" class="avatar-sm rounded-circle me-2"> James Athey</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Latest Transaction</h4>
                        <div class="table-responsive">
                            <table class="table table-hover table-centered table-nowrap mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">(#) Id</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Amount</th>
                                        <th scope="col" colspan="2">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">#14256</th>
                                        <td>
                                            <div>
                                                <img src="{{asset('backend/images/user-2.jpg')}}" alt="" class="avatar-xs rounded-circle me-2"> Philip Smead
                                            </div>
                                        </td>
                                        <td>15/1/2018</td>
                                        <td>$94</td>
                                        <td><span class="badge bg-success">Delivered</span></td>
                                        <td>
                                            <div>
                                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">#14257</th>
                                        <td>
                                            <div>
                                                <img src="{{asset('backend/images/user-3.jpg')}}" alt="" class="avatar-xs rounded-circle me-2"> Brent Shipley
                                            </div>
                                        </td>
                                        <td>16/1/2019</td>
                                        <td>$112</td>
                                        <td><span class="badge bg-warning">Pending</span></td>
                                        <td>
                                            <div>
                                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">#14258</th>
                                        <td>
                                            <div>
                                                <img src="{{asset('backend/images/user-4.jpg')}}" alt="" class="avatar-xs rounded-circle me-2"> Robert Sitton
                                            </div>
                                        </td>
                                        <td>17/1/2019</td>
                                        <td>$116</td>
                                        <td><span class="badge bg-success">Delivered</span></td>
                                        <td>
                                            <div>
                                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">#14259</th>
                                        <td>
                                            <div>
                                                <img src="{{asset('backend/images/user-5.jpg')}}" alt="" class="avatar-xs rounded-circle me-2"> Alberto Jackson
                                            </div>
                                        </td>
                                        <td>18/1/2019</td>
                                        <td>$109</td>
                                        <td><span class="badge bg-danger">Cancel</span></td>
                                        <td>
                                            <div>
                                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">#14260</th>
                                        <td>
                                            <div>
                                                <img src="{{asset('backend/images/user-6.jpg')}}" alt="" class="avatar-xs rounded-circle me-2"> David Sanchez
                                            </div>
                                        </td>
                                        <td>19/1/2019</td>
                                        <td>$120</td>
                                        <td><span class="badge bg-success">Delivered</span></td>
                                        <td>
                                            <div>
                                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">#14261</th>
                                        <td>
                                            <div>
                                                <img src="{{asset('backend/images/user-2.jpg')}}" alt="" class="avatar-xs rounded-circle me-2"> Philip Smead
                                            </div>
                                        </td>
                                        <td>15/1/2018</td>
                                        <td>$94</td>
                                        <td><span class="badge bg-warning">Pending</span></td>
                                        <td>
                                            <div>
                                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Chat</h4>
                        <div class="chat-conversation">
                            <ul class="conversation-list" data-simplebar="init" style="max-height: 367px;"><div class="simplebar-wrapper" style="margin: 0px -10px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: -17px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: auto; overflow: hidden scroll;"><div class="simplebar-content" style="padding: 0px 10px;">
                                <li class="clearfix">
                                    <div class="chat-avatar">
                                        <img src="{{asset('backend/images/user-2.jpg')}}" class="avatar-xs rounded-circle" alt="male">
                                        <span class="time">10:00</span>
                                    </div>
                                    <div class="conversation-text">
                                        <div class="ctext-wrap">
                                            <span class="user-name">John Deo</span>
                                            <p>
                                                Hello!
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="clearfix odd">
                                    <div class="chat-avatar">
                                        <img src="{{asset('backend/images/user-3.jpg')}}" class="avatar-xs rounded-circle" alt="Female">
                                        <span class="time">10:01</span>
                                    </div>
                                    <div class="conversation-text">
                                        <div class="ctext-wrap">
                                            <span class="user-name">Smith</span>
                                            <p>
                                                Hi, How are you? What about our next meeting?
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <div class="chat-avatar">
                                        <img src="{{asset('backend/images/user-2.jpg')}}" class="avatar-xs rounded-circle" alt="male">
                                        <span class="time">10:04</span>
                                    </div>
                                    <div class="conversation-text">
                                        <div class="ctext-wrap">
                                            <span class="user-name">John Deo</span>
                                            <p>
                                                Yeah everything is fine
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="clearfix odd">
                                    <div class="chat-avatar">
                                        <img src="{{asset('backend/images/user-3.jpg')}}" class="avatar-xs rounded-circle" alt="male">
                                        <span class="time">10:05</span>
                                    </div>
                                    <div class="conversation-text">
                                        <div class="ctext-wrap">
                                            <span class="user-name">Smith</span>
                                            <p>
                                                Wow that's great
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="clearfix odd">
                                    <div class="chat-avatar">
                                        <img src="{{asset('backend/images/user-3.jpg')}}" class="avatar-xs rounded-circle" alt="male">
                                        <span class="time">10:08</span>
                                    </div>
                                    <div class="conversation-text">
                                        <div class="ctext-wrap">
                                            <span class="user-name mb-2">Smith</span>

                                            <img src="{{asset('backend/images/user-1.jpg')}}" alt="" height="48" class="rounded me-2">
                                            <img src="{{asset('backend/images/user-2.jpg')}}" alt="" height="48" class="rounded">
                                        </div>
                                    </div>
                                </li>
                            </div></div></div></div><div class="simplebar-placeholder" style="width: auto; height: 480px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="height: 280px; transform: translate3d(0px, 0px, 0px); display: block;"></div></div></ul>
                            <div class="row">
                                <div class="col-sm-9 col-8 chat-inputbar">
                                    <input type="text" class="form-control chat-input" placeholder="Enter your text">
                                </div>
                                <div class="col-sm-3 col-4 chat-send">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-success">Send</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->



    </div> <!-- container-fluid -->
</div>