<?php $title = 'InsertNewsView';?>

<?php ob_start();?>
<section class="InsertNewsView">
        <div class="container mb-5">
            <div class="row">
                <div class="col-12 mt-5">
                    <h1>Insert news</h1>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit<br> voluptatem accusantium doloremque laudantium
                </div>
                    <div class="row justify-content-center">
                    <div class="col-sm-12 col-md-6">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="author" class="form-label">author</label>
                                <input type="text" class="form-control" name="author" id="author" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                            <label for="genre" class="form-label">Genre</label>
                            <select class="form-select" id="genre" name="genre" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="Tips">Tips</option>
                                <option value="Business">Business</option>
                                <option value="Consulting">Consulting</option>
                            </select>
                            </div>
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" name="title" id="title" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="picture" class="form-label">Default file input example</label>
                                <input class="form-control" type="file" name="picture" id="picture" id="formFile">
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" name="description" id="description" placeholder="Votre description..."></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="text" class="form-label">Message</label>
                                <textarea class="form-control" name="text" id="text" placeholder="Votre message..."></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="date" class="form-label">Date du jour</label>
                                <input name="date" class="form-control" name="date" type="date" id="date" placeholder="Votre message..."></textarea>
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary" name="action" type="submit">Submit form</button>
                            </div>
                        </form>
                        <?php
echo $Msg;

?>
                    </div>
                    </div>

            </div>
        </div>
    </section>
    <script>
        tinymce.init({
  selector: 'textarea#text'
});
    </script>
<?php $content = ob_get_clean();?>

<?php require 'template.php';?>