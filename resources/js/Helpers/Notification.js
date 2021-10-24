class Notification{

    success(){
        new Noty({

            type: 'success',
            layout: 'topRight',
            text: 'Successfully Done !',
            timeout: 2000,

    }).show();

    }
    alert(){
        new Noty({

            type: 'alert',
            layout: 'topRight',
            text: 'Are You Sure ?',
            timeout: 2000,

        }).show();
    }

    error(){
        new Noty({

            type: 'alert',
            layout: 'topRight',
            text: 'Something went wrong',
            timeout: 2000,

        }).show();

    }

    warning(){
        new Noty({

            type: 'warning',
            layout: 'topRight',
            text: 'Oopss Wrong !',
            timeout: 2000,

        }).show();

    }

    image_validation(){
        new Noty({

            type: 'error',
            layout: 'topRight',
            text: 'Upload Image less than 1 MB !',
            timeout: 2000,

        }).show();

    }
    cart_success(){
        new Noty({

            type: 'success',
            layout: 'topRight',
            text: 'Successfully Add to Cart !',
            timeout: 2000,

        }).show();

    }

    cart_delete(){
        new Noty({

            type: 'success',
            layout: 'topRight',
            text: 'Successfully Deleted !',
            timeout: 2000,

        }).show();

    }


}

export default Notification = new Notification()
