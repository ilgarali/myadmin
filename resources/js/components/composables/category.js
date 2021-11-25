import axios from "axios"
import common from "./common"
import {ref} from 'vue'


export default function useCategory() {
    const categories = ref([])
    const category = ref()
    const {baseUrl} = common()
    const getCategories = async () => {
        console.log(baseUrl);
        let response = await axios.get(baseUrl + 'categories')
        console.log(response.data);
        categories.value = response.data.data
    }

    const getSingle = (id) => {

    }

    const storeCategory = (data) => {

    }

    const updateCategory = (id) => {

    }

    return {
        categories,
        getCategories
    }


}