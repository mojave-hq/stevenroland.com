import Fuse from 'fuse.js';

export default () => ({
    fuse: null,
    
    searching: false,

    query: '',

    init() {
        axios('/index.json')
            .then(response => {
                this.fuse = new Fuse(response.data, {
                    minMatchCharLength: 3,
                    keys: ["title", "description", "tags"],
                });
            });
    },

    get results () {
        return this.query ? this.fuse.search(this.query) : [];
    },

    showInput() {
        this.searching = true;

        this.$nextTick(() => {
            this.$refs.search.focus();
        })
    },

    reset() {
        this.query = '';
        this.searching = false;
    }
});