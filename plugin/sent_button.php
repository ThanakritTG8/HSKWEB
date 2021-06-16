<style>
    #send {
        background: #1AAB8A;
        color: #fff;
        border: none;
        position: relative;
        height: 30px;
        font-size: 1.6em;
        padding: 0 2em;
        cursor: pointer;
        transition: 800ms ease all;
        outline: none;
        border-radius: 20px;
        width: 214px;
    }

    #send:hover {
        background: #fff;
        color: #1AAB8A;
    }

    #send:before,
    #send:after {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        height: 2px;
        width: 0;
        background: #1AAB8A;
        transition: 400ms ease all;
    }

    #send:after {
        right: inherit;
        top: inherit;
        left: 0;
        bottom: 0;
    }

    #send:hover:before,
    #send:hover:after {
        width: 100%;
        transition: 800ms ease all;
    }
</style>
<button id="send"><?= $mess_send ?></button>