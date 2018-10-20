# -*- coding: utf-8 -*-
import logging
import random
import gc
import traceback

from time import sleep
from datetime import datetime
from selenium import webdriver
from mongoengine.queryset.visitor import Q
from selenium.webdriver.common.keys import Keys

import log
import Func_test

def open_crawl():
    chromeOptions = webdriver.ChromeOptions()
    chromeOptions.add_argument('--disable-notifications')
    chromeOptions.add_argument('--headless')
    chromeOptions.add_argument('--disable-gpu')

    driver = webdriver.Chrome(chrome_options=chromeOptions)

    try:
        crawler(driver)
        driver.close()
    except Exception as e:
        logging.info(traceback.format_exc())
        driver.close()
        
def crawler(driver):
    driver.get("http://web.engr.oregonstate.edu/~lujui/index.html")

    logging.info("Now testing restaurant recommendation system")
    # search for restaurant recommendation
    Func_test.test_restaurantSearch(driver)

    logging.info("Now testing login function")
    # test login function
    Func_test.test_login(driver)
    sleep(1)





if __name__ == "__main__":
    open_crawl()