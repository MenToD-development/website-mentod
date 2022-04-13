import state from "./state";
import mutations from "./mutations";
import actions from "./actions";

export const mobileMenuModule = {
    namespaced: true,

    state: state,
    mutations: mutations,
    actions: actions,
};
