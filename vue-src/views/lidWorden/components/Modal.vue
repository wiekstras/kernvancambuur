<template>
    <transition name="modal-fade">
        <div class="modal-backdrop">
            <div class="modal" role="dialog" aria-labelledby="modalTitle" aria-describedby="modalDescription">
                <header class="modal-header" id="modalTitle">
                    <slot name="header">Default header waarde maar kun je aanpassen</slot>
                    <button type="button" class="btn-close" @click="close" aria-label="Close modal">x</button>
                </header>
                <section class="modal-body" id="modalDescription">
                    <slot name="body">Default body waarde maar kun je aanpassen</slot>
                </section>
                <footer class="modal-footer">
                    <slot name="footer"></slot>
                    <button type="button" class="btn-green" @click="close" aria-label="Close modal">Sluiten</button>
                </footer>
            </div>
        </div>
    </transition>
</template>

<script>
export default {
    name: "Modal",
    methods: {
        close() {
            this.$emit('close');
        }
    }
}
</script>

<!--Modal style, maar kan miss nog mooier gemaakt worden.-->
<style scoped>
.modal-backdrop {
    position: fixed;
    background-color: rgba(0, 0, 0, 0.3);
    display: flex;
    justify-content: center;
    align-items: center;
}

.modal {
    background: #FFFFFF;
    box-shadow: 2px 2px 20px 1px;
    overflow-x: auto;
    display: flex;
    flex-direction: column;
    width: 50%;
    left: auto;
    top:auto;
    height: 50%;
}

.modal-header,
.modal-footer {
    padding: 15px;
    display: flex;
}

.modal-header {
    position: relative;
    border-bottom: 1px solid #eeeeee;
    color: #4AAE9B;
    justify-content: space-between;
}

.modal-footer {
    border-top: 1px solid #eeeeee;
    flex-direction: column;
    justify-content: flex-end;
}

.modal-body {
    position: relative;
    padding: 20px 10px;
}

.btn-close {
    display: flex;
    align-items: center;
    border: none;
    font-size: 20px;
    padding: 10px;
    cursor: pointer;
    font-weight: bold;
    color: #4AAE9B;
    background: transparent;
}

.btn-green {
    color: white;
    background: #4AAE9B;
    border: 1px solid #4AAE9B;
    border-radius: 2px;
}

.modal-fade-enter,
.modal-fade-leave-to {
    opacity: 0;
}

.modal-fade-enter-active,
.modal-fade-leave-active {
    transition: opacity .5s ease;
}
</style>
