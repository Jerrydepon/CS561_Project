# -*- coding: utf-8 -*-
import logging
import requests
import random

from time import sleep
from selenium import webdriver
from datetime import datetime

import log

def test_signup(driver):
    btn_url = driver.find_element_by_class_name("signup").find_element_by_tag_name("a").get_attribute("href")
    driver.get(btn_url)
    s_id_box = driver.find_element_by_css_selector("input[name='uid']")
    s_pwd_box = driver.find_element_by_css_selector("input[name='pwd']")

    test_id = "test1"
    test_pwd = test_id

    s_id_box.clear()
    s_id_box.send_keys(test_id)
    s_pwd_box.clear()
    s_pwd_box.send_keys(test_pwd)
    sleep(1)

    sbm_btn = driver.find_element_by_css_selector(".btn")
    sbm_btn.click()

    sleep(2)
    print(driver.current_url)

    if "login.html" in driver.current_url:
        logging.info("Sign up successfully")
    else:
        logging.info("Sign up ERROR!!!")

def test_login(driver, withoutSignup):
    if withoutSignup == True:
        btn_url = driver.find_element_by_class_name("login").find_element_by_tag_name("a").get_attribute("href")
        driver.get(btn_url)

    id_box = driver.find_element_by_id("account")
    pwd_box = driver.find_element_by_id("password")

    id_box.clear()
    id_box.send_keys("jerry")
    pwd_box.clear()
    pwd_box.send_keys("kid")
    sleep(1)

    sbm_btn = driver.find_element_by_id("sbm_btn")
    sbm_btn.click()

    sleep(2)

    if driver.find_elements_by_class_name("logout").size() > 0:
        logging.info("Successfully logged in ")
    else:
        logging.info("Login error")

def test_restaurantSearch(driver):
    search_box = driver.find_element_by_id("RestaurantName")
    search_box.clear()
    search_box.send_keys("Hesse")
    sleep(1)

    srch_btn = driver.find_element_by_id("button")
    srch_btn.click()

    sleep(2)

    if driver.find_elements_by_tag_name("tbody"):
        logging.info("Successfully finished searching ")
    else:
        if driver.find_element_by_id("msg") == "Not found":
            logging.info("No result. --Successful")
        else: 
            logging.info("Something's wrong...")

def test_recipe(driver):
    btn_url = driver.find_element_by_class_name("recipe").find_element_by_tag_name("a").get_attribute("href")
    driver.get(btn_url)
    
    if "login.html" in driver.current_url:
        logging.info("Sign up successfully")
    else:
        logging.info("Sign up ERROR!!!")
