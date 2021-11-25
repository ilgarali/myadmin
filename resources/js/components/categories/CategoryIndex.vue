<template>
    <div>
        Categories
    </div>
</template>

<script>
import { onMounted } from '@vue/runtime-core'
import useCategory from '../composables/category';
export default {
    setup(){
        const {getCategories} = useCategory()
        onMounted(getCategories())
    }
}
</script>