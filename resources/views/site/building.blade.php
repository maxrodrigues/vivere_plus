@extends('site.page')

@section('title', 'Empreendimentos - Vivere Plus')
@section('page', 'Empreendimentos')

@section('content')
    <div class="page_content_wrap">
        <div class="content_wrap">
            <div class="content">
                <a id="content_skip_link_anchor" class="quanzo_skip_link_anchor" href="index.html%3Fp=6852.html#"></a>
                <article id="post-6852" class="post_item_single post_type_page post-6852 page type-page status-publish hentry">
                    <div class="post_content entry-content">
                        <div class="es-wrap quanzo">
                            <form method="GET" action="index.html%3Fp=6852.html" class="es-dropdown-container">
                                <select class="js-es-select2-base js-es-change-submit"
                                    name="redirect_view_sort">
                                    <option value="recent">Mais recente</option>
                                    <option value="highest_price">Maior preço</option>
                                    <option value="lowest_price">Menor preço</option>
                                    <option value="featured">Destaques</option>
                                </select>
                                <input type="hidden" name="shortcode_identifier" value="1" />
                            </form>
                            <div class="es-listing es-layout-3_col">
                                @for ($i = 0; $i < 7; $i++)
                                <div class="properties type-properties status-publish has-post-thumbnail hentry es_category-apartamentos es_status-open es_type-casa es_feature-decorado es_feature-piscina" style="margin-bottom: 40px;">
                                    <div class="es-property-inner">
                                        <div class="es-property-thumbnail">
                                            <div class="es-thumbnail">
                                                <a href="index.html%3Fp=6953.html">
                                                    <img width="536" height="370" src="{{ asset('storage/uploads/2021/02/12-536x370.jpeg') }}" class="attachment-es-image-size-archive size-es-image-size-archive" alt="" loading="lazy" />
                                                    <ul class="es-property-label-wrap">
                                                        <li class="es-property-label es-property-label-open-house" style="color:#2bbe0e">Open House</li><br>
                                                    </ul>
                                                    <div class="es-thumbnail-bottom">3</div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="es-property-info">
                                            <div class="es-row-view">
                                                <h2>
                                                    <a href="index.html%3Fp=6953.html">Edifício Lumière</a>
                                                    <span class="es-price">$ 350.00</span>
                                                </h2>
                                            </div>
                                            <div class="es-col-view">
                                                <h2>
                                                    <a class="es-property-link" href="index.html%3Fp=6953.html">Edifício Lumière</a>
                                                </h2>
                                                <span class="es-price">$ 350.00</span>
                                            </div>
                                            <div class="es-property-content">
                                                <div class="es-property-excerpt">
                                                    <p>
                                                        Viver no Lumière é sonhar acordado. Você desfruta do mar de Itapoã, próximo a dezenas de opções de lazer, gastronomia e comércio em geral.
                                                    </p>
                                                </div>
                                                <div class="es-property-wishlist"></div>
                                            </div>
                                            <div class="es-bottom-info">
                                                <div class="es-bottom-icon-cols">
                                                    <span class="es-bottom-icon">
                                                        <i class="es-icon es-squirefit" aria-hidden="true"></i> 250 m²
                                                    </span>
                                                    <span class="es-bottom-icon">
                                                        <i class="es-icon es-bed" aria-hidden="true"></i> 4 beds
                                                    </span>
                                                    <span class="es-bottom-icon">
                                                        <i class="es-icon es-bath" aria-hidden="true"></i> 2 baths
                                                    </span>
                                                </div>
                                                <div class="es-bottom-icon-list">
                                                    <span class="es-bottom-icon">
                                                        <i class="es-icon es-squirefit" aria-hidden="true"></i> 250 m²
                                                    </span>
                                                    <span class="es-bottom-icon">
                                                        <i class="es-icon es-bed" aria-hidden="true"></i> 4 beds
                                                    </span>
                                                    <span class="es-bottom-icon">
                                                        <i class="es-icon es-bath" aria-hidden="true"></i> 2 baths
                                                        </span>
                                                </div>
                                                <div class="es-details-wrap es-details-no-padding">
                                                    <div class="es-details-flex">
                                                        <div class="es-map-link-wrap">
                                                            <a href="index.html%3Fp=6852.html#" class="es-map-view-link es-hover-show" data-longitude="-40.3273357" data-latitude="-20.3858509">View on map</a>
                                                        </div>
                                                        <span class="es-read-wrap">
                                                            <a href="index.html%3Fp=6953.html" class="es-button es-button-orange es-hover-show es-read">Details</a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endfor

                                {{-- <div id="post-6860" class="post-6860 properties type-properties status-publish has-post-thumbnail hentry es_category-apartamentos es_type-casa es_feature-decorado es_feature-piscina">
                                    <div class="es-property-inner">
                                        <div class="es-property-thumbnail">
                                            <div class="es-thumbnail">
                                                <a href="index.html%3Fp=6860.html">
                                                    <img width="536" height="370" src="{{ asset('storage/uploads/2021/02/12-536x370.jpeg') }}" class="attachment-es-image-size-archive size-es-image-size-archive" alt="" loading="lazy" />
                                                    <ul class="es-property-label-wrap">
                                                        <li class="es-property-label es-property-label-open-house" style="color:#2bbe0e">Open House</li><br>
                                                    </ul>
                                                    <div class="es-thumbnail-bottom">3</div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="es-property-info">
                                            <div class="es-row-view">
                                                <h2>
                                                    <a href="index.html%3Fp=6860.html">
                                                        Edifício Marina Bay Residences
                                                    </a>
                                                    <span class="es-price">$ 350.00</span>
                                                </h2>
                                            </div>
                                            <div class="es-col-view">
                                                <h2>
                                                    <a class="es-property-link" href="index.html%3Fp=6860.html">
                                                        Edifício Marina Bay Residences
                                                    </a>
                                                </h2>
                                                <span class="es-price">$ 350.00</span>
                                            </div>
                                            <div class="es-property-content">
                                                <div class="es-property-excerpt">
                                                    <p>
                                                        Viver no Marina Bay Residences é sentir-se nos melhores
                                                        <br />
                                                        resorts de Miami.
                                                    </p>
                                                </div>
                                                <div class="es-property-wishlist">
                                                </div>
                                            </div>
                                            <div class="es-bottom-info">
                                                <div class="es-bottom-icon-cols">
                                                    <span class="es-bottom-icon">
                                                        <i class="es-icon es-squirefit" aria-hidden="true"></i> 250 m²
                                                        </span>
                                                    <span class="es-bottom-icon">
                                                        <i class="es-icon es-bed" aria-hidden="true"></i> 4 beds
                                                        </span>
                                                    <span class="es-bottom-icon">
                                                        <i class="es-icon es-bath" aria-hidden="true"></i> 2 baths
                                                    </span>
                                                </div>
                                                <div class="es-bottom-icon-list">
                                                    <span class="es-bottom-icon">
                                                        <i class="es-icon es-squirefit" aria-hidden="true"></i> 250 m²
                                                    </span>
                                                    <span class="es-bottom-icon">
                                                        <i class="es-icon es-bed" aria-hidden="true"></i> 4 beds
                                                    </span>
                                                    <span class="es-bottom-icon">
                                                        <i class="es-icon es-bath" aria-hidden="true"></i> 2 baths
                                                    </span>
                                                </div>
                                                <div class="es-details-wrap es-details-no-padding">
                                                    <div class="es-details-flex">
                                                        <div class="es-map-link-wrap">
                                                            <a href="index.html%3Fp=6852.html#" class="es-map-view-link es-hover-show" data-longitude="-40.3273357" data-latitude="-20.3858509">View on map</a>
                                                        </div>
                                                        <span class="es-read-wrap">
                                                            <a href="index.html%3Fp=6860.html" class="es-button es-button-orange es-hover-show es-read">Details</a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
    <a id="footer_skip_link_anchor" class="quanzo_skip_link_anchor" href="index.html%3Fp=6852.html#"></a>
    @include('site.partials.footer')

@endsection
