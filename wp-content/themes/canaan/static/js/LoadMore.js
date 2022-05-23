class LoadMore {
    constructor(el, options) {
        this.isLoading = false;
        this.data = { ...__mainData };

        this.wrapper = el;
        this.btn = el.querySelector('[data-project-button]');


        this.grid = el.querySelector('[data-project-grid]');
        this.btn.addEventListener('click', this.loadMore);

    }

    loadMore = () => {
        if (!this.data.loadMore) {
            this.elLoad.remove();
        }
        if (this.isLoading) return;
        this.isLoading = true;
        this.callLoop();
    }

    callLoop() {
        const data = {
            action: 'get_more_posts',
            postsPerPage: this.data.postsPerPage,
            offset: this.data.offset,
            category: 0,
            postType: __mainData.postType,
        };
        this.btn.style.opacity = '30';

        const params = new URLSearchParams(data);
        fetch(this.data.ajaxUrl, {
            method: 'POST',
            body: params,
        })
            .then(res => res.json())
            .catch(error => {
                console.log('error', error);
                this.btn.style.opacity = '100';
                this.isLoading = false;
            })
            .then(res => {
                this.btn.style.opacity = '100';

                this.isLoading = false;
                if (res.isLast) {
                    this.data.loadMore = false;
                    this.btn.remove();
                }
               this.grid
                    .insertAdjacentHTML('beforeend', res.html);
                this.data.offset = parseInt(res.offset);
            });
    }
}

export default LoadMore;