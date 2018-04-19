@extends('Welcome')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>Add an Article</h3></div>

                <div class="panel-body">
                    <form class="form-horizontal" action="/article" method="post">
                        <?php echo csrf_field(); ?>

                        <div class="form-group">
                            <label for="title" class="col-md-4 control-label">Title</label>

                            <div class="col-md-6">
                                <input id="title" type="text" name="title" class="form-control" placeholder="add title.." required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="section" class="col-md-4 control-label">Article Section:</label>

                            <div class="col-md-6">
                                <select id="section" class="form-control" name="section" required>
                                    <option value="">Select</option>
                                    <option value="technology">Technology</option>
                                    <option value="creativity">Creativity</option>
                                    <option value="culture">Culture</option>
                                    <option value="entrepreneurship">Entrepreneurship</option>
                                    <option value="digital">Digital design</option>
                                    <option value="politics">Politics</option>
                                    <option value="art">Art</option>
                                    <option value="food">Food</option>
                                    <option value="other">Other</option>

                                </select>
                            </div>

                        </div>

                        <div class="form-group">
                            <label for="readTime" class="col-md-4 control-label">Read Time (minutes)</label>

                            <div class="col-md-6">
                                <input id="readTime" type="text" name="readTime" class="form-control" placeholder="estimated read time.." required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="content" class="col-md-4 control-label">Put Your Article here:</label>

                            <div class="col-md-6">
                                <textarea class="form-control" id="content" name="content" rows="8" cols="80" required></textarea>
                            </div>

                        </div>


                        <input type="submit" name="submit" value="Publish">


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
