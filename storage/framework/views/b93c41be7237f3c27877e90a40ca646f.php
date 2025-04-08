<?php $__env->startSection('content'); ?>

    <div class="container-fluid">
        <div class="card" style="border: 1px solid #ccc; border-radius: 5px; padding: 10px;">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Sản phẩm</h5>
                <div class="mb-3">
                    <label class="form-label">Tên</label>
                    <input class="form-control" value="<?php echo e($product->name); ?>" disabled>
                </div>

                <div class="mb-3">
                    <label class="form-label">Nơi sản xuất </label>
                    <input class="form-control" value="<?php echo e($product->origin->name); ?>" disabled>
                </div>

                <div class="mb-3">
                    <label class="form-label">Thương hiệu</label>
                    <input class="form-control" value="<?php echo e($product->brand->name); ?>" disabled>
                </div>

                <div class="mb-3">
                    <label class="form-label">Danh mục</label>
                    <input class="form-control" value="<?php echo e($product->category->name); ?>" disabled>
                </div>

                <div class="mb-3">
                    <label class="form-label">Giá gốc</label>
                    <input class="form-control" value="<?php echo e(convertPrice(initialPrice($product->price, $product->discount))); ?>" disabled>
                </div>

                <div class="mb-3">
                    <label class="form-label">Chiết khấu (%)</label>
                    <input class="form-control" value="<?php echo e(($product->discount)); ?>" disabled>
                </div>

                <div class="mb-3">
                    <label class="form-label">Giá bán <small>(sau chiết khấu)</small></label>
                    <input class="form-control" value="<?php echo e(convertPrice($product->price)); ?>" disabled>
                </div>

                <div class="mb-3">
                    <label class="form-label">Số lượng</label>
                    <input class="form-control" value="<?php echo e($product->quantity); ?>" disabled>
                </div>

                <div class="mb-3">
                    <label class="form-label">Đã bán</label>
                    <input class="form-control" value="<?php echo e($product->sold); ?>" disabled>
                </div>

                <div class="mb-3">
                    <label class="form-label">Loại da</label>
                    <input class="form-control" value="<?php echo e($product->skin_type); ?>" disabled>
                </div>

                <div class="mb-3">
                    <label class="form-label">Kết cấu</label>
                    <input class="form-control" value="<?php echo e($product->texture); ?>" disabled>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Mô tả</label>
                    <?php echo $product->description; ?>

                </div>

                <div class="mb-3">
                    <label class="form-label me-2">Hình ảnh</label>
                    <div class="d-flex">
                        <?php $__currentLoopData = $product->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <img width="150px" class="m-2" src="<?php echo e($image->image); ?>" >
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/super-build/ckeditor.js"></script>

    <script>
        CKEDITOR.ClassicEditor.create(document.getElementById("editor"), {

            toolbar: {
                items: [
                    'exportPDF','exportWord', '|',
                    'findAndReplace', 'selectAll', '|',
                    'heading', '|',
                    'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript', 'removeFormat', '|',
                    'bulletedList', 'numberedList', 'todoList', '|',
                    'outdent', 'indent', '|',
                    'undo', 'redo',
                    '-',
                    'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
                    'alignment', '|',
                    'link', 'insertImage', 'blockQuote', 'insertTable', 'mediaEmbed', 'codeBlock', 'htmlEmbed', '|',
                    'specialCharacters', 'horizontalLine', 'pageBreak', '|',
                    'textPartLanguage', '|',
                    'sourceEditing'
                ],
                shouldNotGroupWhenFull: true
            },
            list: {
                properties: {
                    styles: true,
                    startIndex: true,
                    reversed: true
                }
            },
            heading: {
                options: [
                    { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                    { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                    { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                    { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
                    { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
                    { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
                    { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
                ]
            },
            placeholder: '',
            fontFamily: {
                options: [
                    'default',
                    'Arial, Helvetica, sans-serif',
                    'Courier New, Courier, monospace',
                    'Georgia, serif',
                    'Lucida Sans Unicode, Lucida Grande, sans-serif',
                    'Tahoma, Geneva, sans-serif',
                    'Times New Roman, Times, serif',
                    'Trebuchet MS, Helvetica, sans-serif',
                    'Verdana, Geneva, sans-serif'
                ],
                supportAllValues: true
            },

            fontSize: {
                options: [ 10, 12, 14, 'default', 18, 20, 22 ],
                supportAllValues: true
            },
            htmlSupport: {
                allow: [
                    {
                        name: /.*/,
                        attributes: true,
                        classes: true,
                        styles: true
                    }
                ]
            },
            htmlEmbed: {
                showPreviews: true
            },
            link: {
                decorators: {
                    addTargetToExternalLinks: true,
                    defaultProtocol: 'https://',
                    toggleDownloadable: {
                        mode: 'manual',
                        label: 'Downloadable',
                        attributes: {
                            download: 'file'
                        }
                    }
                }
            },
            mention: {
                feeds: [
                    {
                        marker: '@',
                        feed: [
                            '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes', '@chocolate', '@cookie', '@cotton', '@cream',
                            '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread', '@gummi', '@ice', '@jelly-o',
                            '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding', '@sesame', '@snaps', '@soufflé',
                            '@sugar', '@sweet', '@topping', '@wafer'
                        ],
                        minimumCharacters: 1
                    }
                ]
            },
            removePlugins: [
                'CKBox',
                'CKFinder',
                'EasyImage',
                'RealTimeCollaborativeComments',
                'RealTimeCollaborativeTrackChanges',
                'RealTimeCollaborativeRevisionHistory',
                'PresenceList',
                'Comments',
                'TrackChanges',
                'TrackChangesData',
                'RevisionHistory',
                'Pagination',
                'WProofreader',
                'MathType',
                'SlashCommand',
                'Template',
                'DocumentOutline',
                'FormatPainter',
                'TableOfContents',
                'PasteFromOfficeEnhanced'
            ]
        });
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\DoAn\resources\views/admin/product/show.blade.php ENDPATH**/ ?>