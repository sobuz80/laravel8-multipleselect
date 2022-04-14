<!DOCTYPE html>
<html>
<head>
    <title>How To Store Multiple Select Value In Laravel ? - codingdriver.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-2 mt-5">
                <div class="card">
                    <div class="card-header bg-info">
                        <h6 class="text-white">How to Store Multiple Select Values in Database using Laravel? - codingdriver.com</h6>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('posts.store') }}">
                            @csrf
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label><strong>Description :</strong></label>
                                <textarea class="form-control" name="description"></textarea>
                            </div>
                            <label>Select Category</label>
                            <select class="form-control"  multiple="multiple" name="category[]">
                                <option value="laravel">Laravel</option>
                                <option value="jQuery">jQuery</option>
                                <option value="react">React</option>
                                <option value="vuejs">VueJs</option>
                                <option value="ajax">Ajax</option>
                                <option value="wordpress">Wordpress</option>
                            </select>
                            <br>
                            <br>
                            <input type="submit" name="btn btn-primary" value="Save">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>