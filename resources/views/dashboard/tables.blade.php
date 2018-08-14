<div class="page-content">
    <div class="content-wrapper">
        <div class="card">
            <div class="card-header header-elements-inline">
            <h4 class="card-title">Statistics</h4>
                <form class="form-inline" action="" method="post">
                    <div class="form-group row">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="filter">Filter By</label>
                            </div>
                            <select class="custom-select" id="filter">
                                <option value="domain">Domain</option>
                                <option value="regex">Regex</option>
                                <option value="ip">IP</option>
                            </select>
                            <input class="form-control" type="text" name="search" id="search">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-search mr-2"></i></button>
                            </div>
                        </div>
                    </div>
                </form> 
            </div>

            <div class="table-responsive no-overflow">
                    <div id="table-container"></div>
            </div>
        </div>
    </div>
</div>
