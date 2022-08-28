import axios from "axios";
import mockCurrencies from "../../../currencies/currencies-list.json";

axios.defaults.baseURL = "http://127.0.0.1:8000/api";

const withAuth = () => {
    return {
        headers: { Authorization: `Bearer ${localStorage.getItem("token")}` },
    };
};
// Core Actions
// --------------------------------------------------------------------------------------------------------------
export const pingServer = async () => {
    const response = await axios.get("/ping");
    return response?.data?.api_on || false;
};

export const convertCurrencies = async data => {
    // return await axios.post("/convert", data);
    return 50;
};

// Auth Actions
// --------------------------------------------------------------------------------------------------------------

export const login = async data => {
    const response = await axios.post("/auth/login", data);
    const token = response?.data?.access_token;
    if (token) {
        localStorage.setItem("token", token);
    }
    return response?.data?.user || false;
};
export const logout = async () => {
    const response = await axios.post("/auth/logout", {}, withAuth());
    if (response.data) localStorage.removeItem("token");
    return response.data || false;
};
export const getUser = async () => {
    const response = await axios.get("/auth/user", withAuth());
    return response.data || false;
};

// CRUD Currencies
export const listCurrency = async data => {
    // return await axios.get("/currencies", data);
    return mockCurrencies.map((e, key) => ({ ...e, id: key }));
};
export const addCurrency = async data => {
    return await axios.create("/currencies", data);
};
export const editCurrency = async (id, data) => {
    return await axios.patch("/currencies/" + id, data);
};
export const deleteCurrency = async id => {
    return await axios.delete("/currencies/" + id, data);
};
