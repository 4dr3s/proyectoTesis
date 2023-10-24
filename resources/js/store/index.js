import { createStore } from "vuex";
import createPersistedState from 'vuex-persistedstate';

export default createStore({
    state:{
        jwt: '',
        error: ''
    },
    mutations:{
        setJwt(state, value){
            state.jwt = value
        },
        setError(state, value){
            state.error = value
        }
    },
    plugins: [createPersistedState({
        key: 'persistencia',
        storage: window.localStorage,
        paths: ['jwt']
    })]
})